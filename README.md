# FedEx Cross Border SDK for PHP

The **FedEx Cross Border SDK for PHP** makes it easy for developers to access [FedEx Cross Border Web Services][fws] in their PHP code, and build robust applications and software
using services like Checkout, PurplePay, Mapper, etc. You can
get started in minutes by [installing the SDK through Composer][docs-installation]
or by downloading a single zip or phar file from our [latest release][latest-release]


## Composer App Skeleton
```php
{
    "require": {
        "php": ">=5.4",
        "guzzlehttp/guzzle": "^5.3.1|^6.2.1",
        "meng-tian/async-soap-guzzle": "^0.2.3",
        "fedexcrossborder/sdk-php": "0.1.38"
    },
    "require-dev": {
            "phpunit/phpunit": "~4.8"
    },
    "repositories": [
        {
          "type": "vcs",
            "url": "http://r3p0:k4m1k4z3@gitlab.crossborder.fedex.com/fcb/fedexcrossborder-sdk-php.git"
        }
    ],
    "config": {
        "secure-http": false
    }
}
```

## Running Tests

```cli
./vendor/bin/phpunit vendor/fedexcrossborder/sdk-php/
```
