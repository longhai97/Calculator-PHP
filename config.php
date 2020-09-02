<?php

use App\Bootstrap;
use Monolog\Handler\SlackWebhookHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use VendorBootstrap\MonologgerBootstrap;

return [
    'services' => [
        new Bootstrap(),
        new MonologgerBootstrap(),
    ],

    'logger' => [
        'handlers' => [
            new StreamHandler('logs/app.log'),
            new SlackWebhookHandler(
                'https://hooks.slack.com/services/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',
                null,
                null,
                false,
                '💩',
                false,
                true,
                Logger::API
            )
        ]
    ]
];
