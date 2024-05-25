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
$zk = new LaravelZkteco('ipaddress', 'port');
```


Call ZKTeco methods

* __Connect__ 
```php
//    connect
//    this return bool
    $zk->connect();   
```

* __Disconnect__ 
```php
//    disconnect
//    this return bool

    $zk->disconnect();   
```

* __Enable Device__ 
```php
//    enable
//    this return bool/mixed

    $zk->enableDevice();   
```
> **NOTE**: You have to call after read/write any info of Device.

* __Disable Device__ 
```php
//    disable 
//    this return bool/mixed

    $zk->disableDevice(); 
```
> **NOTE**: You have to call before read/write any info of Device. 


* __Device Version__ 
```php
//    get device version 
//    this return bool/mixed

    $zk->version(); 
```


* __Device Os Version__ 
```php
//    get device os version 
//    this return bool/mixed

    $zk->osVersion(); 
```

* __Power Off__ 
```php
//    turn off the device 
//    this return bool/mixed

    $zk->shutdown(); 
```

* __Restart__ 
```php
//    restart the device 
//    this return bool/mixed

    $zk->restart(); 
```

* __Sleep__ 
```php
//    sleep the device 
//    this return bool/mixed

    $zk->sleep(); 
```

* __Resume__ 
```php
//    resume the device from sleep 
//    this return bool/mixed

    $zk->resume(); 
```

* __Voice Test__ 
```php
//    voice test of the device "Thank you" 
//    this return bool/mixed

    $zk->testVoice(); 
```

* __Platform__ 
```php
//    get platform 
//    this return bool/mixed

    $zk->platform(); 
```

* __Firmware Version__ 
```php
//    get firmware version
//    this return bool/mixed

    $zk->fmVersion(); 
```

* __Work Code__ 
```php
//    get work code
//    this return bool/mixed

    $zk->workCode(); 
```

* __SSR__ 
```php
//    get SSR
//    this return bool/mixed

    $zk->ssr(); 
```

* __Pin Width__ 
```php
//    get  Pin Width
//    this return bool/mixed

    $zk->pinWidth(); 
```

* __Serial Number__ 
```php
//    get device serial number
//    this return bool/mixed

    $zk->serialNumber(); 
```

* __Device Name__ 
```php
//    get device name
//    this return bool/mixed

    $zk->deviceName(); 
```

* __Get Device Time__ 
```php
//    get device time

//    return bool/mixed bool|mixed Format: "Y-m-d H:i:s"

    $zk->getTime(); 
```

* __Set Device Time__ 
```php
//    set device time
//    parameter string $t Format: "Y-m-d H:i:s"
//    return bool/mixed

    $zk->setTime(); 
```

* __Get Users__ 
```php
//    get User
//    this return array[]

    $zk->getUser(); 
```

* __Set Users__ 
```php
//    set user

//    1 s't parameter int $uid Unique ID (max 65535)
//    2 nd parameter int|string $userid ID in DB (same like $uid, max length = 9, only numbers - depends device setting)
//    3 rd parameter string $name (max length = 24)
//    4 th parameter int|string $password (max length = 8, only numbers - depends device setting)
//    5 th parameter int $role Default Util::LEVEL_USER
//    6 th parameter int $cardno Default 0 (max length = 10, only numbers

//    return bool|mixed

    $zk->setUser(); 
```

* __Clear All Admin__ 
```php
//    remove all admin
//    return bool|mixed

    $zk->clearAdmin(); 
```

* __Clear All Users__ 
```php
//    remove all users
//    return bool|mixed

    $zk->clearAdmin(); 
```

* __Remove A User__ 
```php
//    remove a user by $uid
//    parameter integer $uid
//    return bool|mixed

    $zk->removeUser(); 
```

* __Get Attendance Log__ 
```php
//    get attendance log

//    return array[]

//    like as 0 => array:5 [▼
//              "uid" => 1      /* serial number of the attendance */
//              "id" => "1"     /* user id of the application */
//              "state" => 1    /* the authentication type, 1 for Fingerprint, 4 for RF Card etc */
//              "timestamp" => "2020-05-27 21:21:06" /* time of attendance */
//              "type" => 255   /* attendance type, like check-in, check-out, overtime-in, overtime-out, break-in & break-out etc. if attendance type is none of them, it gives  255. */
//              ]

    $zk->getAttendance(); 
```

* __Clear Attendance Log__ 
```php
//    clear attendance log

//    return bool/mixed

    $zk->clearAttendance(); 
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
