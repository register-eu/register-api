# Register.eu public API

[![Build Status](https://travis-ci.org/register-eu/register-api.svg?branch=master)](https://travis-ci.org/register-eu/register-api)


The *Register.eu public API project* wraps around [Guzzle](http://docs.guzzlephp.org/en/latest/) and offers *HMAC authentication*. You can use the client to easily connect to the Register.eu public API endpoint.

To learn more about the **Register.eu public API**, go to [https://api.register.eu/](https://api.register.eu/).

## Install

```
composer require register-eu/register-api
```


## Example

The code example below creates a new hosting account called **identifier.be** on our hosting environment.

```php
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
$body->servicepack_id = '0';
$body->identifier = 'identifier.be';
$body->password = 'password';

// Create hosting account
$response = $client->post('/v1/hostingaccounts', ['json' => $body]);

// Dump response
var_dump(
    json_decode($response->getBody()->getContents())
);
```

Go to the [examples](examples) folder to see more examples.