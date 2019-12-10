# Laravel-blockchain-api
This is a laravel package for interacting with blockchain api 

# laravel-blockchain

> A Laravel 5 Package for working with blockchain api

## Installation

[PHP](https://php.net) 5.4+ or [HHVM](http://hhvm.com) 3.3+, and [Composer](https://getcomposer.org) are required.

To get the latest version of blockchain api, simply run the code below in your project.

```
"composer require botdigit/blockchain"
```
Once Laravel Blockchain is installed, You need to register the service provider. Open up `config/app.php` and add the following to the `providers` key.

* `Botdigit\Blockchain\BlockchainServiceProvider::class,`

Also, register the Facade like so:

```php
'aliases' => [
    ...
    'Blockchain' => Botdigit\Blockchain\Facades\Blockchain::class,
    ...
]
```

## Configuration

You can publish the configuration file using this command:

```bash
php artisan vendor:publish --provider="Maxtee\Blockchain\BlockchainServiceProvider"
```

A configuration-file named `blockchain.php` with default settings will be placed in your `config` directory:

You can visit this link to get your blockchain api

```
https://api.blockchain.info/customer/signup
```

## Usage

Open your .env file and add the following in this format. Ensure you must have gotten your api key:

```php
BLOCKCHAIN_API=***********************
DEFAULT_BTC_FEE=0.0001
TRANSACTION_BTC_FEE=0.000
```

## USING /BOTDIGIT/BLOCKCHAIN PACKAGE 
```
Add the following line to your controller

use Blockchain
```

## 1. GET RATES
```php
Blockchain::getRates();
```


## 2. CONVERT A CURRENCY VALUE TO BTC
```php
$rates = Blockchain::convertCurrencyToBTC('NGN'  600000);
```


## 3. GET STATISTICS CHART
```php
$rates = Blockchain::getStats();
```


## 4. CREATE WALLET
```php
$wallet = Blockchain::createWallet($wallet_password);
```

## 5. WALLET BALANCE
```php
$wallet = Blockchain::getWalletBalance($wallet_guid, $wallet_password);
```

## 6. Making Outgoing Payment
```php
$wallet = Blockchain::makeOutgoingPayment($wallet_guid, $amount, $wallet_password, $to_guid);
```
## 7. List Address
```php
$wallet = Blockchain::listAddress($wallet_guid, $wallet_password);
```

## 8. Create New Address
```php
$wallet = Blockchain::createNewAddress($wallet_guid, $wallet_password, $label ='');
```

## Credit 
Readme document was inpsired and tuned from one of @Unicodedeveloper. Prosper Otemuyiwa.

## Contributing

Please feel free to fork this package and contribute by submitting a pull request to enhance the functionalities.

## How can I thank you?

Why not star the github repo? I'd love the attention! Why not share the link for this repository on Twitter or HackerNews? Spread the word!

Don't forget to [follow me on twitter](https://twitter.com/taiwomix)!

Thanks!
Famurewa Taiwo

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

