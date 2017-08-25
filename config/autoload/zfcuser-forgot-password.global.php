<?php

return [
    'e4w' => [
        'forgot-password' => [
            // Token entity class
            'tokenEntity' => 'Eye4web\ZfcUser\ForgotPassword\Entity\Token',

            // How many hours a token is active in
            'tokenHours' => 1,

            // Mail transporter
            'mailTransporter' => 'Soflomo\Mail\Service\MailService'
        ]
    ]
];
