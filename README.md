# roqqupayphp

[![Latest Version on Packagist](https://img.shields.io/packagist/v/roqqupay/roqqupayphp.svg?style=flat-square)](https://packagist.org/packages/roqqupay/roqqupayphp)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/roqqupay/roqqupayphp/Tests?label=tests)](https://github.com/roqqupay/roqqupayphp/actions?query=workflow%3ATests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/roqqupay/roqqupayphp.svg?style=flat-square)](https://packagist.org/packages/roqqupay/roqqupayphp)

Documentation for the api can be found at [Roqqu api documentation](https://developers.roqqu.com/reference)

## Installation

You can install the package via composer:

```bash
composer require roqqupay/roqqupayphp
```

## Usage

```php
//Get all token prices
$roqquPayClass = new Roqqupay\Roqqupayphp();
$tokenPrices = $roqquPayClass->getallTokenPrices();
```

```php
//Get a specific token price, this example gives you the price for btc, replace with token symbol name, to get the price
$roqquPayClass = new Roqqupay\Roqqupayphp();
$symbol = 'btc';
$tokenPrice = $roqquPayClass->getTokenPrice($symbol);
```

```php
//Get price history for a token
$roqquPayClass = new Roqqupay\Roqqupayphp();
$symbol = 'btc';
$priceHistory = $roqquPayClass->getTokenPriceHistory($symbol);
```

```php
//Get data for a wallet address
$roqquPayClass = new Roqqupay\Roqqupayphp();
$symbol = 'btc' //or any other one;
$address = 'wallet address'
$getWalletAddressData = $roqquPayClass->getAddressData($symbol, $address);
```

```php
//Generate wallet address
//This method needs your secret key to be passed when instantiating the class
$secretKey = 'RQ-SEC-XXXXXXXXX';
$roqquPayClass = new Roqqupay\Roqqupayphp($secretKey);
$token = 'btc' //or any other one;
$generateWalletAddress = $roqquPayClass->generateWalletAddress($token);
```

```php
//Get  wallets
//This method needs your secret key to be passed when instantiating the class
$secretKey = 'RQ-SEC-XXXXXXXXX';
$roqquPayClass = new Roqqupay\Roqqupayphp($secretKey);
$token = 'btc' //or any other one;
$getWallet = $roqquPayClass->getWallets($token);
```

```php
//Delete wallet
//This method needs your secret key to be passed when instantiating the class
$secretKey = 'RQ-SEC-XXXXXXXXX';
$roqquPayClass = new Roqqupay\Roqqupayphp($secretKey);
$token = 'btc' //or any other one;
$wallet = 'wallet address';
$deleteWallet = $roqquPayClass->deleteWallet($token, $wallet);
```

```php
//Send token to wallet address
//amount: This is the amount of token you want to send
//wallet: This is the recipient wallet address that will receive the token
//memo: This is only used for BNB, EOS, HIVE and STEEM, these tokens use the optional memo system
//tag: This is only required for XRP transfers
//This methods needs your secret key to be passed when instantiating the class
$secretKey = 'RQ-SEC-XXXXXXXXX';
$roqquPayClass = new Roqqupay\Roqqupayphp($secretKey);
$token = 'btc' //or any other one;
$sendToken = $roqquPayClass->sendToken($token, $amount, $wallet, $memo, $tag);
```

```php
//Verify bvn
//This method needs your secret key to be passed when instantiating the class
$secretKey = 'RQ-SEC-XXXXXXXXX';
$roqquPayClass = new Roqqupay\Roqqupayphp($secretKey);
$bvn = 'Your bvn';
$verifyBvn = $roqquPayClass->bvnVerify($bvn);
```

```php
//Get banks
$roqquPayClass = new Roqqupay\Roqqupayphp();
$banks = $roqquPayClass->getBanks();
```

```php
//Resolve bank account
//This methods needs your secret key to be passed when instantiating the class
$secretKey = 'RQ-SEC-XXXXXXXXX';
$roqquPayClass = new Roqqupay\Roqqupayphp($secretKey);
$account_number = 'account number';
$bank = 'Name of bank gotten from the list of banks';
$resolveBankAccount = $roqquPayClass->bankAccountResolve($account_number, $bank);
```

```php
//Recharge airtime
//This methods needs your secret key to be passed when instantiating the class
$secretKey = 'RQ-SEC-XXXXXXXXX';
$roqquPayClass = new Roqqupay\Roqqupayphp($secretKey);
$phone_number = 'Phone number to recharge';
$amount = 'Amount to recharge';
$rechargeAirtime = $roqquPayClass->rechargeAirtime($phone_number, $amount);
```

```php
//Get data bundles
$roqquPayClass = new Roqqupay\Roqqupayphp();
$provider = 'mtn' //or any other one supported
$dataBundles = $roqquPayClass->getDataBundles($provider);
```

```php
//Subscribe data
//This method needs your secret key to be passed when instantiating the class
//provider:This is the name of the provider, they are mtn, glo, etisalat and airtel
//variation_code:This is the variation code retrieved from the get data bundles endpoint
//phone_number: This is the recipient phone number that will receive the data bundle
$secretKey = 'RQ-SEC-XXXXXXXXX';
$roqquPayClass = new Roqqupay\Roqqupayphp($secretKey);
$phone_number = 'Phone number to recharge';
$amount = 'Amount to recharge';
$subscribeData = $roqquPayClass->dataSubscription($provider, $variation_code, $phone_number);
```

```php
//Get cable bundes
$roqquPayClass = new Roqqupay\Roqqupayphp();
$provider = 'dstv' //(dstv, gotv,and others);
$tokenPrices = $roqquPayClass->getCableBundles($provider);
```

```php
//Verify meter number
//provider: This is the meter provider, eko, ikeja and ph supported,
//meter_type: This is the type of meter, prepaid or postpaid
//meter_type: This is the type of meter, prepaid or postpaid
$roqquPayClass = new Roqqupay\Roqqupayphp();
$verifyMeter = $roqquPayClass->verifyMeterNumber($provider, $meter_type, $meter_number));`
```

```php
//recharge electric meter
//This method needs your secret key to be passed when instantiating the class
//provider: This is the meter provider, eko, ikeja and ph supported
//meter_type: This is the type of meter, prepaid or postpaid
//meter_number: This is the meter number that needs to be verified
//amount: This is the amount you intend to recharge to the meter
//phone_number: This is the phone number that will receive the token code after paying
$secretKey = 'RQ-SEC-XXXXXXXXX';
$roqquPayClass = new Roqqupay\Roqqupayphp($secretKey);
$rechargeMeter = $roqquPayClass->electricMeterRecharge($provider, $meter_type, $meter_number, $amount, $phone_number);
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

-   [Chibuokem ibezim](https://github.com/chibuokem)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
