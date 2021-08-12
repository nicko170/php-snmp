# PHP SNMP - A fluent interface to SNMP network devices

[![Latest Version on Packagist](https://img.shields.io/packagist/v/nicko170/php-snmp.svg?style=flat-square)](https://packagist.org/packages/nicko170/php-snmp) [![Total Downloads](https://img.shields.io/packagist/dt/nicko170/php-snmp.svg?style=flat-square)](https://packagist.org/packages/nicko170/php-snmp) [![StyleCI](https://github.styleci.io/repos/395032878/shield?branch=main)](https://github.styleci.io/repos/395032878?branch=main)

## Installation

You can install the package via composer:

```bash
composer require nicko170/php-snmp
```

## Usage

```php
use Nicko170\PhpSnmp\SNMP;

$device = new SNMP(host: '103.2.119.110', community: 'public', version: '2c');
$device->system()->name();
```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](changelog.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](contributing.md) for details.

### Security

If you discover any security related issues, please email nick@npratley.net instead of using the issue tracker.

## Credits

* [Nick Pratley](https://github.com/nicko170)
* [All Contributors](https://github.com/nicko170/php-snmp/tree/8fdf418abba05be40f42b8b578ded7635c4ff951/contributors/README.md)

## License

The GNU GPLv3. Please see [License File](license.md) for more information.

