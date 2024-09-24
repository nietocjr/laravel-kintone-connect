# laravel-kintone-connect provides seamless integration between Laravel and Kintone, allowing easy interaction with Kintone’s API to manage records.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/nietocjr/laravel-kintone-connect.svg?style=flat-square)](https://packagist.org/packages/nietocjr/laravel-kintone-connect)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/nietocjr/laravel-kintone-connect/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/nietocjr/laravel-kintone-connect/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/nietocjr/laravel-kintone-connect/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/nietocjr/laravel-kintone-connect/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/nietocjr/laravel-kintone-connect.svg?style=flat-square)](https://packagist.org/packages/nietocjr/laravel-kintone-connect)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require nietocjr/laravel-kintone-connect
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-kintone-connect-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-kintone-connect-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-kintone-connect-views"
```

## Usage

```php
$laravelKintoneConnect = new nietocjr\LaravelKintoneConnect();
echo $laravelKintoneConnect->echoPhrase('Hello, nietocjr!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Nieto Jose](https://github.com/nietocjr)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
