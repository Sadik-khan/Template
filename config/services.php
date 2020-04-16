<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'google' => [
        'client_id' => '792287243464-294tsoebe43229hnafjh3r851bhaftkt.apps.googleusercontent.com',
        'client_secret' => '_wJgUgm3xgUFzrRaJloN5Ax1',
        'redirect' => 'http://127.0.0.1:8000/admin/login/google/callback',
    ],

    'linkedin' => [
        'client_id' => '81t58ygl6jlatd',
        'client_secret' => 'fCqrP3cBX43Gv233',
        'redirect' => 'http://127.0.0.1:8000/admin/login/linkedin/callback',
    ],

];
