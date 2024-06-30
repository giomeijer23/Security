<?php

// In app/Providers/AppServiceProvider.php
namespace App\Providers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('strong_password', function($attribute, $value, $parameters, $validator) {
            return preg_match('/[A-Z]/', $value) && // Minimaal één hoofdletter
                   preg_match('/[a-z]/', $value) && // Minimaal één kleine letter
                   preg_match('/[0-9]/', $value) && // Minimaal één cijfer
                   preg_match('/[\W]/', $value) &&  // Minimaal één speciaal teken
                   strlen($value) >= 12;            // Minimaal 12 tekens lang
        });

        Validator::replacer('strong_password', function($message, $attribute, $rule, $parameters) {
            return 'Het :attribute moet minimaal 12 tekens lang zijn en ten minste één hoofdletter, één kleine letter, één cijfer en één speciaal teken bevatten.';
        });
    }
}
