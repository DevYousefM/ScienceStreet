<?php

namespace App\Http\Controllers;

use App\Exports\PaymentsExport;
use App\Models\Payments;
use App\Models\PromoCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Facades\Excel;
use Nafezly\Payments\Classes\PaymobPayment;

class PaymentsController extends Controller
{
    public function index($name)
    {
        if (!in_array($name, ["Engineering", "Science"])) {
            abort(404);
        }
        return view("pages.registration", ["name" => $name]);
    }

    public function process_register(Request $request)
    {
        $amount = 800;
        if (!in_array($request->course, ["Engineering", "Science"])) {
            abort(404);
        }
        $secs = [
            "Sec-01: Saturday and Tuesday 3:00-5:00 pm - السكشن-01 : السبت والثلاثاء",
            "Sec-02: Saturday and Tuesday 5:00-7:00 pm - السكشن-02 : السبت والثلاثاء",
            "Sec-03: Saturday and Tuesday 7:00-9:00 pm - السكشن-03 : السبت والثلاثاء"
        ];
        $request->validate([
            'studentName' => 'required|string|max:255',
            'parentName' => 'required|string|max:255',
            'parentNumber' => 'required',
            'email' => 'required|email',
            'schoolName' => 'required|string|max:255',
            'age' => 'required|integer|min:7|max:13',
            "promo" => "nullable|string|exists:promo_codes,promo",
            "time" => "in:" . implode(',', $secs)
        ]);
        $promo = PromoCode::where("promo", $request->promo)->first();
        if ($promo) {
            $percent = $promo->percent;
            $originalPrice = 800;
            $discountPercentage = 20;
            $discountAmount = ($percent / 100) * $amount;
            $finalPrice = $amount - $discountAmount;
        }

        $payment = new PaymobPayment();
        $response = $payment
            ->setUserFirstName($request->studentName)
            ->setUserLastName($request->parentName)
            ->setUserEmail($request->email)
            ->setUserPhone($request->parentNumber)
            ->setCurrency("EGP")
            ->setAmount($finalPrice ?? $amount)
            ->pay();

        Payments::create([
            "student_name" => $request->studentName,
            "parent_name" => $request->parentName,
            "parent_number" => $request->parentNumber,
            "parent_email" => $request->email,
            "school_name" => $request->schoolName,
            "age" => $request->age,
            "time" => $request->time,
            "payment_id" => $response["payment_id"],
            "price" => $finalPrice ?? $amount,
            "promo" => $promo->promo ?? null,
            "course" => $request->course,
        ]);
        return Redirect::to($response["redirect_url"]);
    }

    public function verifyWithPaymob(Request $request)
    {
        $payment = new PaymobPayment();
        $response = $payment->verify($request);
        $msg = $response["message"];
        $stu = $response["success"];
        $payment_db = Payments::where("payment_id", $response["payment_id"])->first();
        if ($response["success"]) {
            $payment_db->update(["status" => "Payment Completed"]);
        } else {
            $payment_db->update(["status" => "Payment Failed"]);
        }
        return view("pages.status", compact("msg"), compact("stu"));
    }

    public function payments()
    {
        $payments = Payments::orderBy("updated_at", "desc")->paginate(5);
        return view("pages.payments", ["payments" => $payments]);
    }
    public function export()
    {
        return Excel::download(new PaymentsExport, "payments.xlsx");
    }
}
