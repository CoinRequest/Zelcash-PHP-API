# ZelCash PHP API Client

PHP package for the [ZelCash](https://explorer.zel.cash) API.

## Getting Started

Run the following command to install this package into your project.

```
composer require coinrequest/zelcash-php-api 
```

### Prerequisites

You will need Composer to install this package.

### Installing

After installing this package with composer, create a new ZelCash
instance.

Something like this

```
$zelCash = new ZelCash();
```

And call the desired endpoint

```
$zelCash->addressEndpoint()->getAddress($address);
```

The current implemented endpoints are: 

* /addr/[:addr][?noTxList=1][&from=&to=]
* /tx/[:txid]
* /block/[:hash]

Please check the endpoints at [https://github.com/TheTrunk/insight-api](https://github.com/TheTrunk/insight-api).

## Running the tests

Run the tests in the Tests directory with PHPUnit.


## Built With

* [ZelCash](https://explorer.zel.cash) - For the ZelCash data :)
* [PHPUnit](https://github.com/sebastianbergmann/phpunit/) - Test Framework
* [Guzzle](https://github.com/guzzle/guzzle) - For HTTP Requests

## Contributing

Please help us to develop this package. Every input and/or feedback is really appreciated!

## License

This project is licensed under the MIT License.


