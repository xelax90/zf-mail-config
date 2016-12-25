# Mail configuration

This module provides a simple factory for mail transports that reads the 
configuration from the application config.

## Installation

Installation of XelaxMailConfig uses composer. For composer documentation, 
please refer to [getcomposer.org](http://getcomposer.org/).

```sh
composer require xelax90/zf-mail-config
```

Then add `XelaxUserNotification` to your `config/application.config.php`.

Now copy the provided configuration files
`vendor/xelax90/zf-mail-config/config/xelax-mail-config.global.php` and
`vendor/xelax90/zf-mail-config/config/xelax-mail-config.local.php.dist` 
into your `config/autoload` directory. Also make another copy of the 
`xelax-mail-config.local.php.dist` file without the `.dist` extension.

## Configuration

For configuration of the transport please refer to the 
[zend-mail documentation](https://docs.zendframework.com/zend-mail/). The provided
configuration is directly passed to the `Zend\Mail\Transport\Factory` factory.

## Retrieving a `TransportInterface` instance

This module registers a factory for the `Zend\Mail\Transport\TransportInterface` class. 
To retrieve an instance from the service manager simply call 

`$transport = $container->get(Zend\Mail\Transport\TransportInterface::class);`