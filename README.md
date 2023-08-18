# Dadata Client for Laravel

<!-- BADGES_START -->
[![Latest Version][badge-release]][packagist]
[![PHP Version][badge-php]][php]
[![Tests][badge-tests]][tests]
[![Total Downloads][badge-downloads]][downloads]

[badge-tests]: https://github.com/orlovtech/dadata-client/actions/workflows/ci-tests.yml/badge.svg
[badge-release]: https://img.shields.io/packagist/v/orlovtech/dadata-client.svg?style=flat-square&label=release
[badge-php]: https://img.shields.io/packagist/php-v/orlovtech/dadata-client.svg?style=flat-square
[badge-downloads]: https://img.shields.io/packagist/dt/orlovtech/dadata-client.svg?style=flat-square&colorB=mediumvioletred

[packagist]: https://packagist.org/packages/orlovtech/dadata-client
[php]: https://php.net
[downloads]: https://packagist.org/packages/orlovtech/dadata-client
[tests]: https://github.com/orlovtech/dadata-client/actions/workflows/ci-tests.yml
<!-- BADGES_END -->

## Installation

### Requirements
The package has been developed and tested to work with the following minimum requirements:

- PHP >=8.1
- Laravel >=9.0

### Install the Package
You can install the package via Composer:

```bash
composer require orlovtech/dadata-client
```

### Publish the Config and Migrations
You can then publish the package's config file and database migrations by using the following command:
```bash
php artisan vendor:publish --provider="OrlovTech\DadataClient\Providers\DadataClientServiceProvider"
```
