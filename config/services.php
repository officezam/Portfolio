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
	    'client_id' => env('Facebook_API'),
	    'client_secret' => env('Facebook_Secret'),
	    'redirect' => env('Facebook_redirect'),
    ],
    'github' => [
	    'client_id' => env('Github_API'),
	    'client_secret' => env('Github_Secret'),
	    'redirect' => env('Github_redirect'),
    ],
  'twitter' => [
	    'client_id' => env('Twitter_API'),
	    'client_secret' => env('Twitter_Secret'),
	    'redirect' => env('Twitter_redirect'),
    ],


];
