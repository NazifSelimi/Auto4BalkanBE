<?php

use Laravel\Sanctum\Sanctum;

return [
    'stateful' => [],

    'guard' => ['sanctum'],

    'expiration' => null,

    'token_prefix' => env('SANCTUM_TOKEN_PREFIX', ''),

    'middleware' => [
    ],
];
