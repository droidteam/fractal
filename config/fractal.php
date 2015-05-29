<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Fractal Serializer
    |--------------------------------------------------------------------------
    |
    | Refer to
    | http://fractal.thephpleague.com/serializers/
    |
    */
    'serializer' => env('FRACTAL_SERIALIZER', 'League\Fractal\Serializer\ArraySerializer'),

    /*
    |--------------------------------------------------------------------------
    | Default Response Headers
    |--------------------------------------------------------------------------
    |
    | Header can be used by the clients of the API service
    | for various purposes.
    | For example ['Accept' => 'Appkr']
    |
    */
    'defaultHeaders' => [],

    /*
    |--------------------------------------------------------------------------
    | Success Response Format
    |--------------------------------------------------------------------------
    |
    | The format will be used at the ApiHelper to respond with success message.
    | respondNoContent(), respondSuccess(), respondCreated() consumes this format
    |
    */
    'successFormat' => [
        'success' => [
            'code'    => ':code',
            'message' => ':message',
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Error Response Format
    |--------------------------------------------------------------------------
    |
    | The format will be used at the ApiHelper to respond with error message.
    | respondWithError(), respondForbidden()... consumes this format
    |
    */
    'errorFormat' =>  [
        'error' => [
            'code'    => ':code',
            'message' => ':message',
        ]
    ]

];
