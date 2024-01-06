<?php

namespace App\Providers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Validator::extend('phone_number', function ($attribute, $value, $parameters, $validator) {
            $pattern = '/^(\+2)?01[0-9]{9}$/';
            return preg_match($pattern, $value);
        });
    }
}
