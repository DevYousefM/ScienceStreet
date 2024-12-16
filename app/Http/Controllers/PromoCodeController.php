<?php

namespace App\Http\Controllers;

use App\Models\PromoCode;
use Illuminate\Http\Request;

class PromoCodeController extends Controller
{
    public function index()
    {
        $promo_codes = PromoCode::all();
        return view("pages.promo-codes", ["promo_codes" => $promo_codes]);
    }

    public function store(Request $request)
    {
        $request->validate([
            "promo" => "required|unique:promo_codes,promo|max:20",
            "percent" => "required|integer|between:1,100",
        ]);
        PromoCode::create([
            "promo" => $request->promo,
            "percent" => $request->percent
        ]);
        return redirect()->back();
    }

    public function delete($id)
    {
        $promo = PromoCode::findOrFail($id);

        $promo->delete();
        return redirect()->back();

    }
}
