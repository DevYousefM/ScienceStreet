<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;

    protected $fillable = [
        "student_name",
        "parent_name",
        "parent_number",
        "time",
        "parent_email",
        "school_name",
        "age",
        "payment_id",
        "status",
        "price",
        "promo",
        "course"
    ];
    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }
}
