<?php

return [
    'service_url' => env('UASLP_SERVICE_URL'),
    'form_url' => env('UASLP_FORM_URL'),
    'client_id' => env('UASLP_CLIENT_ID'),
    'return_url' => env('UASLP_RETURN_URL', rtrim((string) env('APP_URL'), '/') . '/callback'),
    'auto_create_users' => env('UASLP_AUTO_CREATE_USERS', true),
];
