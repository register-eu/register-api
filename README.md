# Register.eu public API

[![Build Status](https://travis-ci.org/register-eu/register-api.svg?branch=master)](https://travis-ci.org/register-eu/register-api)
[![Coverage Status](https://coveralls.io/repos/github/register-eu/register-api/badge.svg?branch=master)](https://coveralls.io/github/register-eu/register-api?branch=master)

The *Register.eu public API project* wraps around [Guzzle](http://docs.guzzlephp.org/en/latest/) and offers *HMAC authentication*. You can use the client to easily connect to the Register.eu public API endpoint.

To learn more about the **Register.eu public API**, go to [https://api.register.eu/](https://api.register.eu/).

## Install

```
composer require register-eu/register-api
```


## Example

The code example below registers a new domain name on your account.

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
$body->domain_name = 'domain-name-to-register.eu';

// Register domain name
$response = $client->post('/v2/domains/registrations', ['json' => $body]);

// Dump location header with link to provisioning job
var_dump(
    $response->getHeader('Location')
);
```

Go to the [examples](examples) folder to see more examples.