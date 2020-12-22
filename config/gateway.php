<?php

return [

    //-------------------------------
    // Timezone for insert dates in database
    // If you want Gateway not set timezone, just leave it empty
    //--------------------------------
    'timezone'     => 'Asia/Tehran',

    //--------------------------------
    // Zarinpal gateway
    //--------------------------------
    'zarinpal'     => [
        'merchant_id'  => 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx',
        'type'         => 'zarin_gate',             // Types: [zarin-gate || normal]
        'callback_url' => '/',
        'server'       => 'germany',                // Servers: [germany || iran || test]
        'email'        => 'email@gmail.com',
        'mobile'       => '09125556677',
        'description'  => 'description',
    ],

    //--------------------------------
    // Mellat gateway
    //--------------------------------
    'mellat'       => [
        'username'     => '',
        'password'     => '',
        'terminal_id'  => 0000000,
        'callback_url' => '/',
    ],

    //--------------------------------
    // Saman gateway
    //--------------------------------
    'saman'        => [
        'merchant_id'  => '',
        'password'     => '',
        'callback_url' => '/',
    ],

    //--------------------------------
    // PayIr gateway
    //--------------------------------
    'payir'        => [
        'api'          => 'xxxxxxxxxxxxxxxxxxxx',
        'callback_url' => '/',
    ],

    //--------------------------------
    // IranKish gateway
    //--------------------------------
    'irankish'     => [
        'merchant_id'  => 'xxxxxxxxxxxxxxxxxxxx',
        'sha1key'      => 'xxxxxxxxxxxxxxxxxxxx',
        'callback_url' => '/',
    ],

    //--------------------------------
    // Sadad gateway
    //--------------------------------
    'sadad'        => [
        'merchant_id'    => '',
        'transactionKey' => '',
        'terminal_id'    => 000000000,
        'callback_url'   => '/',
    ],

    //--------------------------------
    // Parsian gateway
    //--------------------------------
    'parsian'      => [
        'pin'          => 'xxxxxxxxxxxxxxxxxxxx',
        'callback_url' => '/',
    ],
    //--------------------------------
    // Pasargad gateway
    //--------------------------------
    'pasargad'     => [
        'terminal_id'      => 000000,
        'merchant_id'      => 000000,
        'certificate_path' => storage_path('gateway/pasargad/certificate.xml'),
        'callback_url'     => '/gateway/callback/pasargad',
    ],

    //--------------------------------
    // Asan Pardakht gateway
    //--------------------------------
    'asanpardakht' => [
        'merchant_id'        => '',
        'merchant_config_id' => 11,
        'username'           => '',
        'password'           => '',
        'key'                => '',
        'iv'                 => '',
        'callback_url'       => '/',
    ],

    //    //--------------------------------
    //    // Paypal gateway
    //    //--------------------------------
    //    'paypal'   => [
    //        // Default product name that appear on paypal payment items
    //        'default_product_name' => 'My Product',
    //        'default_shipment_price' => 0,
    //        // set your paypal credential
    //        'client_id' => 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
    //        'secret'    => 'xxxxxxxxxx_xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
    //        'settings'  => [
    //            'mode'                   => 'sandbox', //'sandbox' or 'live'
    //            'http.ConnectionTimeOut' => 30,
    //            'log.LogEnabled'         => true,
    //            'log.FileName'           => storage_path() . '/logs/paypal.log',
    //            /**
    //             * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
    //             *
    //             * Logging is most verbose in the 'FINE' level and decreases as you
    //             * proceed towards ERROR
    //             */
    //            'call_back_url'          => '/gateway/callback/paypal',
    //            'log.LogLevel'           => 'FINE'
    //
    //        ]
    //    ],
    //-------------------------------
    // Tables names
    //--------------------------------
    'table'        => 'gateways',
];
