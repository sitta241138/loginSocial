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
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => '1188905854579433',
        'client_secret' => '2676a05aa014f9ab5fd0f8c78e47cfca',
        'redirect' => 'http://localhost:8000/auth/facebook/callback',
    ],

    'twitter' => [
        'client_id' => 'RoX6VZrKt2g5GzIAZTmrRdLlV',
        'client_secret' => 'aVtCnx9gIzAg5ZAcAWjh9rQGN1bWdbNhm5w2xNwGbl0r5AUoSE',
        'redirect' => 'http://localhost:8000/auth/twitter/callback',
    ],

    'google' => [
        'client_id' => '448085974024-ls10opq2ab5bdj2gbbc5igq9evlffen9.apps.googleusercontent.com',
        'client_secret' => 'Pu70113YYPwyqii-NWtLvPpz',
        'redirect' => 'http://localhost:8000/auth/google/callback',
    ],

    'line' => [
        'client_id' => '1560260457',
        'client_secret' => '7c61356aaeeabeff3718d5bbf5d22bca',
        'redirect' => 'http://localhost:8000/auth/line/callback',
    ],

];
