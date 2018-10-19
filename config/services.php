<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('your-mailgun-domain'),
        'secret' => env('your-mailgun-key'),
    ],

    'ses' => [
        'key' => env('your-ses-key'),
        'secret' => env('your-ses-secret'),
        'region' => env('ses-region', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('your-sparkpost-key'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

];
