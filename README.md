RBAC Manager for Yii 2
======================
GUI manager for RBAC (Role Base Access Control) Yii2. Easy to manage authorization of user :smile:.

[![Latest Stable Version](http://poser.pugx.org/mztest/yii2-admin/v)](https://packagist.org/packages/mztest/yii2-admin)
[![Total Downloads](http://poser.pugx.org/mztest/yii2-admin/downloads)](https://packagist.org/packages/mztest/yii2-admin)
[![Latest Unstable Version](http://poser.pugx.org/mztest/yii2-admin/v/unstable)](https://packagist.org/packages/mztest/yii2-admin)
[![License](http://poser.pugx.org/mztest/yii2-admin/license)](https://packagist.org/packages/mztest/yii2-admin)
[![PHP Version Require](http://poser.pugx.org/mztest/yii2-admin/require/php)](https://packagist.org/packages/mztest/yii2-admin)

Documentation
-------------
> **Important: If you install version 3.x, please see [this readme](https://github.com/mdmsoft/yii2-admin/blob/3.master/README.md#upgrade-from-2x).**


- [Change Log](CHANGELOG.md).
- [Authorization Guide](http://www.yiiframework.com/doc-2.0/guide-security-authorization.html). Important, read this first before you continue.
- [Basic Configuration](docs/guide/configuration.md)
- [Basic Usage](docs/guide/basic-usage.md).
- [User Management](docs/guide/user-management.md).
- [Using Menu](docs/guide/using-menu.md).
- [Api](https://mdmsoft.github.io/yii2-admin/index.html).

Installation
------------

### Install With Composer

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require mztest/yii2-admin "~2.0"
```

Or, you may add

```
"mztest/yii2-admin": "~2.0"
```

to the require section of your `composer.json` file and execute `php composer.phar update`.

### Install From the Archive

Download the latest release from here [releases](https://github.com/mdmsoft/yii2-admin/releases), then extract it to your project.
In your application config, add the path alias for this extension.

```php
return [
    ...
    'aliases' => [
        '@mdm/admin' => 'path/to/your/extracted',
        // for example: '@mdm/admin' => '@app/extensions/mdm/yii2-admin-2.0.0',
        ...
    ]
];
```

[**More...**](docs/guide/configuration.md)

[screenshots](https://goo.gl/r8RizT)
