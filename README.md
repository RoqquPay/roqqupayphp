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
$roqqupayClass = new Roqqupay\Roqqupayphp();
$tokenPrices = $roqqupayClass->getallTokenPrices();
```

```php
//Get a specific token price, this example gives you the price for btc, replace with token symbol name, to get the price
$roqqupayClass = new Roqqupay\Roqqupayphp();
$symbol = 'btc';
$tokenPrice = $roqqupayClass->getTokenPrice($symbol);
```

```php
//Get price history for a token
$roqqupayClass = new Roqqupay\Roqqupayphp();
$symbol = 'btc';
$priceHistory = $roqqupayClass->getTokenPriceHistory($symbol);
```

```php
//Get data for a wallet address 
$roqqupayClass = new Roqqupay\Roqqupayphp();
$symbol = 'btc' //or any other one;
$address = 'wallet address'
$getWalletAddressData = $roqqupayClass->getAddressData($symbol, $address);
```

```php
//Generate wallet address
//This method needs your secret key to be passed when instantiating the class
$secretKey = 'RQ-SEC-XXXXXXXXX';
$roqqupayClass = new Roqqupay\Roqqupayphp($secretKey);
$token = 'btc' //or any other one;
$generateWalletAddress = $roqqupayClass->generateWalletAddress($token);
```

```php
//Get  wallets
//This method needs your secret key to be passed when instantiating the class
$secretKey = 'RQ-SEC-XXXXXXXXX';
$roqqupayClass = new Roqqupay\Roqqupayphp($secretKey);
$token = 'btc' //or any other one;
$getWallet = $roqqupayClass->getWallets($token);
```

```php
//Delete wallet
//This method needs your secret key to be passed when instantiating the class
$secretKey = 'RQ-SEC-XXXXXXXXX';
$roqqupayClass = new Roqqupay\Roqqupayphp($secretKey);
$token = 'btc' //or any other one;
$wallet = 'wallet address';
$deleteWallet = $roqqupayClass->deleteWallet($token, $wallet);
```

```php
//Send token to wallet address 
//amount: This is the amount of token you want to send
//wallet: This is the recipient wallet address that will receive the token
//memo: This is only used for BNB, EOS, HIVE and STEEM, these tokens use the optional memo system
//tag: This is only required for XRP transfers
//This methods needs your secret key to be passed when instantiating the class
$secretKey = 'RQ-SEC-XXXXXXXXX';
$roqqupayClass = new Roqqupay\Roqqupayphp($secretKey);
$token = 'btc' //or any other one;
$sendToken = $roqqupayClass->sendToken($token, $amount, $wallet, $memo, $tag);
```

```php
//Verify bvn
//This method needs your secret key to be passed when instantiating the class
$secretKey = 'RQ-SEC-XXXXXXXXX';
$roqqupayClass = new Roqqupay\Roqqupayphp($secretKey);
$bvn = 'Your bvn';
$verifyBvn = $roqqupayClass->bvnVerify($bvn);
```

```php
//Get banks
$roqqupayClass = new Roqqupay\Roqqupayphp();
$tokenPrices = $roqqupayClass->getBanks();
```

```php
//Resolve bank account
//This methods needs your secret key to be passed when instantiating the class
$secretKey = 'RQ-SEC-XXXXXXXXX';
$roqqupayClass = new Roqqupay\Roqqupayphp($secretKey);
$account_number = 'account number';
$bank = 'Name of bank gotten from the list of banks';
$resolveBankAccount = $roqqupayClass->bankAccountResolve($account_number, $bank);
```

```php
//Recharge airtime
//This methods needs your secret key to be passed when instantiating the class
$secretKey = 'RQ-SEC-XXXXXXXXX';
$roqqupayClass = new Roqqupay\Roqqupayphp($secretKey);
$phone_number = 'Phone number to recharge';
$amount = 'Amount to recharge';
$resolveBankAccount = $roqqupayClass->rechargeAirtime($phone_number, $amount);
```

```php
//Get data bundles
$roqqupayClass = new Roqqupay\Roqqupayphp();
$provider = 'mtn' //or any other one supported
$dataBundles = $roqqupayClass->getDataBundles($provider);
```


```php
//Subscribe data
//This method needs your secret key to be passed when instantiating the class
//provider:This is the name of the provider, they are mtn, glo, etisalat and airtel
//variation_code:This is the variation code retrieved from the get data bundles endpoint
//phone_number: This is the recipient phone number that will receive the data bundle
$secretKey = 'RQ-SEC-XXXXXXXXX';
$roqqupayClass = new Roqqupay\Roqqupayphp($secretKey);
$phone_number = 'Phone number to recharge';
$amount = 'Amount to recharge';
$resolveBankAccount = $roqqupayClass->dataSubscription($provider, $variation_code, $phone_number);
```

```php
//Get cable bundes
$roqqupayClass = new Roqqupay\Roqqupayphp();
$provider = 'dstv'(dstv. glo,and others);
$tokenPrices = $roqqupayClass->getCableBundles($provider);
```

```php
//Verify meter number
//provider: This is the meter provider, eko, ikeja and ph supported,
//meter_type: This is the type of meter, prepaid or postpaid
//meter_type: This is the type of meter, prepaid or postpaid
$roqqupayClass = new Roqqupay\Roqqupayphp();
$resolveBankAccount = $roqqupayClass->verifyMeterNumber($provider, $meter_type, $meter_number));`
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
$roqqupayClass = new Roqqupay\Roqqupayphp($secretKey);
$resolveBankAccount = $roqqupayClass->electricMeterRecharge($provider, $meter_type, $meter_number, $amount, $phone_number);
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
