# Ruba PHP SDK

Connect a PHP application to Ruba with typed models and clients for billing, checkout, customer management, subscriptions, orders, and webhooks.

## Requirements

- PHP 8.2 or newer
- Composer

## Install with Composer

```bash
composer require getruba/sdk
```

## Set up the client

```php
<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

$ruba = Ruba\Ruba::builder()
    ->setSecurity($_ENV['RUBA_ACCESS_TOKEN'])
    ->build();

$pages = $ruba->organizations->list(page: 1, limit: 10);

foreach ($pages as $page) {
    if ($page->statusCode === 200) {
        var_dump($page);
    }
}
```

Store the access token outside your source code. Use sandbox credentials during development and production credentials only on your deployed server.

## Documentation and support

Endpoint schemas and authentication details are available in the [Ruba API reference](https://docs.getruba.com/api-reference/introduction). Open an [issue](https://github.com/Rubadot/ruba-php/issues) if the PHP client behaves differently from the documented API.

## License

MIT
