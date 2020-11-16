# teachworks-php

PHP bindings to the Teachworks API

## Installation

This library requires PHP 7.1 and later

The recommended way to install teachworks-php is through [Composer](https://getcomposer.org):

This library is intended to speed up development time but is not a shortcut to reading the Teachworks documentation. Many endpoints require specific and required fields for successful operation. Always read the documentation before using an endpoint.

```sh
composer require mckltech/teachworks-php
```

## Clients - API Key 

Initialize your client using your access token:

```php
use Teachworks\TeachworksClient;

$client = new TeachworksClient('TEACHWORKS_API_KEY');
```

> - You can find your API Key by following the Teachworks API documentation: https://documenter.getpostman.com/view/10096149/SWTABydD#75b553de-816d-40a9-913b-936cd1f6a91a

## Support, Issues & Bugs

This library is unofficial and is not endorsed or supported by Teachworks.

For bugs and issues, open an issue in this repo and feel free to submit a PR. Any issues that do not contain full logs or explainations will be closed. We need you to help us help you!

## API Versions

This library is intended to work with Version 1 of the Teachworks Public API

## Customers

```php
/** List Customers */
$client->customers->list();

/** Get Customer by ID */
$client->customers->get(1310);

```

## Supported Endpoints

All endpoints follow a similar mechanism to the examples show above. Again, please ensure you read the Teachworks API documentation prior to use as there are numerous required fields for most POST/PUT operations.

Not all operations are supported e.g. You may not be able to CREATE, UPDATE OR DELETE on certain endpoints. These methods are included for library completeness in the hope they may one day be supported. Always check in a sandbox first.

- Employees
- Customers
- Students
- Lessons
- Invoices
- Payments

## Exceptions

Exceptions are handled by HTTPlug. Every exception thrown implements `Http\Client\Exception`. See the [http client exceptions](http://docs.php-http.org/en/latest/httplug/exceptions.html) and the [client and server errors](http://docs.php-http.org/en/latest/plugins/error.html). If you want to catch errors you can wrap your API call into a try/catch block:

```php
try {
    $users = $client->users->list();
} catch(Http\Client\Exception $e) {
    if ($e->getCode() == '404') {
        // Handle 404 error
        return;
    } else {
        throw $e;
    }
}
```

## Credit

The layout and methodology used in this library is courtesy of https://github.com/intercom/intercom-php


