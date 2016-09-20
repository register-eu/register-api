<?php

require dirname(__DIR__) . '/vendor/autoload.php';

$client = new \RegisterEu\Client(
    [
        'debug' => true,
        'base_uri' => 'https://api.register.eu',
        'registereu_api_key' => 'XXXX',
        'registereu_api_secret' => 'YYYY'
    ]
);

// Get detail of a hosting account
$response = $client->get('/v1/hostingaccounts/identifier.be');

// Dump response
var_dump(
    json_decode($response->getBody()->getContents())
);