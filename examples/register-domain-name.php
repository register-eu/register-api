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

$body = new \stdClass();
$body->domain_name = 'domain-name-to-register.eu';

// Register domain name
$response = $client->post('/v1/domains/registrations', ['json' => $body]);

// Dump response
var_dump(
    $response->getHeader('Location')
);