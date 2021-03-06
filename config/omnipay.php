<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Route prefix for omnipay routes.
    |--------------------------------------------------------------------------
    |
    | This is the route prefix, for all public omnipay routess
    |
     */
    'public_route_prefix' => env('OMNIPAY_PREFIX', '/omnipay/'),

    /*
    |--------------------------------------------------------------------------
    | Transaction prefix for omnipay transactions.
    |-------------------------------------------------------------------------
    |
    | If this prefix is set, then a custom id, is send to the payment gateway.
    |
    | This is useful for testing purposes, so that different environments
    | can be prefixed with different ID's so they do not clash.
    |
    | If set to an empty string, the database ID of the transaction is only used.
    |
     */
    'transaction_route_prefix' => env('OMNIPAY_TRANSACTION_PREFIX', ''),

    /*
    |--------------------------------------------------------------------------
    | Route prefix for omnipay routes behind login.
    |--------------------------------------------------------------------------
    |
    | This is the route prefix, for all routes, that are behind login.
    |
     */
    'admin_route_prefix' => env('OMNIPAY_ADMIN_PREFIX', '/admin/omnipay/'),

    /*
    |--------------------------------------------------------------------------
    | Default Config Driver
    |--------------------------------------------------------------------------
    |
    | The omnipay module, supports two driver modes. Array and database.
    | It is possible to store, merchant config, in either an array, so
    | in this config file, or it is possible to use the supplied model and
    | database driver for storing merchants.
    |
    | Supported: "array", "database"
    |
    */
    'driver' => 'array',

    /*
    |--------------------------------------------------------------------------
    | Default Merchant
    |--------------------------------------------------------------------------
    |
    | This is the default merchant to be used, if no other merchant is supplied.
    | If the driver used is array, you would need to supply the key in the array.
    | If the driver used is database, then it would be the id, on database level
    | of the merchant in the database, that needs to be used.
    |
    */
    'default_merchant' => 'default',

    'defaults' => array(
        'testMode'      => false,
    ),

    'merchants' => [
        'default' => [
            'gateway'   => 'DibsD2',
            'config'    => [
                'key1'          => '', // MD5 Key 1
                'key2'          => '', // MD5 Key 2
                'merchantId'    => 0, // Merchant ID
                'username'      => '', // Username for a webuser
                'password'      => '', // Password for a webuser
                'lang'          => 'dk', // Language shown in the dibs window
                'currency'      => 'DKK', // Currency used for this account
                'payType'       => 'DK,V-DK,MC,VISA', // Possible values here https://tech.dibspayment.com/D2/Toolbox/Paytypes
            ]
        ],
    ],
];
