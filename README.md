# roqqupayphp

[![Latest Version on Packagist](https://img.shields.io/packagist/v/roqqupay/roqqupayphp.svg?style=flat-square)](https://packagist.org/packages/roqqupay/roqqupayphp)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/roqqupay/roqqupayphp/Tests?label=tests)](https://github.com/roqqupay/roqqupayphp/actions?query=workflow%3ATests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/roqqupay/roqqupayphp.svg?style=flat-square)](https://packagist.org/packages/roqqupay/roqqupayphp)


Documentation for the api can be found at (https://developers.roqqu.com/reference)


## Installation

You can install the package via composer:

```bash
composer require roqqupay/roqqupayphp
```

## Usage

```php
Get all token prices
$roqqupayClass = new Roqqupay\Roqqupayphp();
echo $roqqupayClass->getallTokenPrices();
```

```php
Get a specific token price, this example gives you the price for btc, replace with token symbol name, to get the price
$roqqupayClass = new Roqqupay\Roqqupayphp();
$symbol = 'btc';
echo $roqqupayClass->getTokenPrice($symbol);
```

```php
Get price history for a token
$roqqupayClass = new Roqqupay\Roqqupayphp();
$symbol = 'btc';
echo $roqqupayClass->getTokenPriceHistory($symbol));
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Chibuokem ibezim](https://github.com/Chibuokemibezim)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
