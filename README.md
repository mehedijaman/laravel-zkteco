# Laravel ZKTeco Integration

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mehedijaman/laravel-zkteco.svg?style=flat-square)](https://packagist.org/packages/mehedijaman/laravel-zkteco)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/mehedijaman/laravel-zkteco/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/mehedijaman/laravel-zkteco/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/mehedijaman/laravel-zkteco/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/mehedijaman/laravel-zkteco/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/mehedijaman/laravel-zkteco.svg?style=flat-square)](https://packagist.org/packages/mehedijaman/laravel-zkteco)

## Overview
The Laravel ZKTeco package provides an easy way to integrate ZKTeco biometric devices with your Laravel application. This package simplifies the process of connecting to ZKTeco devices, fetching attendance logs, and managing user data.

## Features
-   **Easy Integration:** Seamlessly connect your Laravel application with ZKTeco biometric devices.
-   **Attendance Management:** Fetch and manage attendance logs from connected devices.
-   **User Management:** Add, update, and remove users on the biometric device directly from your application.
-   **Real-time Data Sync:** Ensure that your application always has the latest attendance data.

## Installation

You can install the package via composer:

```bash
composer require mehedijaman/laravel-zkteco
```
The package is designed to automatically register itself upon installation.

Please ensure that the PHP sockets extension is enabled on your server. If it is not enabled, you will need to activate it.

## Activate PHP Socket
Ensure that the PHP sockets extension is enabled on your server. If it is not enabled, follow these steps to activate it:

Locate the php.ini File:
The php.ini file's location depends on your PHP installation. Common locations include:

-   /etc/php/8.x/cli/php.ini (for CLI)
-   /etc/php/8.x/apache2/php.ini (for Apache)
-   /etc/php/8.x/fpm/php.ini (for PHP-FPM)

Edit the php.ini File:
Open the php.ini file in a text editor with superuser privileges:

```
sudo nano /etc/php/7.x/apache2/php.ini
```
Uncomment the Sockets Extension:
Find the following line:

```
;extension=sockets
```

Remove the semicolon (;) to uncomment the line:
```
extension=sockets
```

Save and Exit:
Save the changes and exit the editor (Ctrl + X, Y, Enter).

Restart the Web Server:
Restart the web server to apply the changes:

```
sudo systemctl restart apache2
```

## Usage

Instantiate the LaravelZkteco Object.
```php
use MehediJaman\LaravelZkteco\LaravelZkteco;
$zk = new MehediJaman\LaravelZkteco('ipaddress', 'port');
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Mehedi Jaman](https://github.com/mehedijaman)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
