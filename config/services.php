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
    'facebook' => [
        'client_id' => '723562798478841',
        'client_secret' => '96155e5f5f53a57d46230b33b6fc0187',
        'redirect' => 'http://localhost:8000/callback/facebook',
    ],
    'google' => [
        'client_id' => '498617676874-bu4b6680qdg0r1dn0pdhgtsn44khhbol.apps.googleusercontent.com',
        'client_secret' => 'eHfOsXGr8KkTQMJOYqHNppam',
        'redirect' => 'http://localhost:8000/callback/google',
    ],

];
