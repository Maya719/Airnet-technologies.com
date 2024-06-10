<?php
use App\Models\Setting;

if (!function_exists('customFunction')) {
    function customFunction($param)
    {
        return 'Custom Function Result: ' . $param;
    }
    function get_logo(){
        $type = 'logo'; 
        $existingSettings = Setting::where('type', $type)->first();
        $existingSettings = json_decode($existingSettings->value, true); // Decode the 'value' property
        $logo_name = $existingSettings['logo'] ?? null;
        return $logo_name;
    }
    function get_favicon(){
        $type = 'logo'; 
        $existingSettings = Setting::where('type', $type)->first();
        $existingSettings = json_decode($existingSettings->value, true); // Decode the 'value' property
        $favicon_name = $existingSettings['favicon'] ?? null;
        return $favicon_name;
    }
    function get_about_us(){
        $type = 'about_us'; 
        $existingSettings = Setting::where('type', $type)->first();
        $aboutus = $existingSettings->value ;
        return $aboutus;
    }
    function get_stripe_public_key(){
        $type = 'stripe_public_key'; 
        $existingSettings = Setting::where('type', $type)->first();
        $stripe_public_key = $existingSettings->value ;
        return $stripe_public_key;
    }
    function get_stripe_secret_key(){
        $type = 'stripe_secret_key'; 
        $existingSettings = Setting::where('type', $type)->first();
        $stripe_public_key = $existingSettings->value ;
        return $stripe_public_key;
    }
    function get_fatoorah_secret_key(){
        $type = 'fatoorah_secret_key'; 
        $existingSettings = Setting::where('type', $type)->first();
        $stripe_public_key = $existingSettings->value ;
        return $stripe_public_key;
    }
    function get_currency(){
        $type = 'currency';
        $existingSettings = Setting::where('type', $type)->first();
        $currency = $existingSettings->value ;
        return $currency;
    }
}