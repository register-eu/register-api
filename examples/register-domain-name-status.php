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

$jobId = 'xxxx-yyyy';

// Get detail of a domain registration order
$response = $client->get(sprintf('/v2/provisioningjobs/%s', $jobId));

// Dump response
var_dump(
    json_decode($response->getBody()->getContents())
);