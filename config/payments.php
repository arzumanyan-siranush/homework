<?php

return [
    'base_currency' => 'EUR',

    'exchange_rates_source' => 'https://api.exchangeratesapi.io/latest?access_key=a3462740dfc2c4568434794b94381b5f',

    'currencies' => [
        'EUR' => [
            'decimal_points' => 2,
        ],
        'USD' => [
            'decimal_points' => 2,
        ],
        'JPY' => [
            'decimal_points' => 0,
        ],
    ],

    'commissions' => [
        'deposit' => [
            'private' => [
                'commission' => .03,
            ],
            'business' => [
                'commission' => .03,
            ],
        ],

        'withdraw' => [
            'private' => [
                'commission' => .3,
                'free_amount' => 1000,
                'free_actions' => 3,
            ],
            'business' => [
                'commission' => .5,
            ],
        ],
    ],
];
