Sylius.
=======

Simple but **end-user and developer friendly** webshop engine built on top of Symfony2.
This is official repository.

**Sylius is still under heavy development so many things will be broken.**

If you want to see how the bundles work check [Sylius sandbox application](http://github.com/Sylius/Sylius-Sandbox).

[![Build status...](https://secure.travis-ci.org/Sylius/Sylius.png)](http://travis-ci.org/Sylius/Sylius)

Quick installation.
-------------------

### For developers.

Clone this repository with this command or download latest release from github.

``` bash
$ git clone http://github.com/Sylius/Sylius.git /path/to/Sylius
```

Open `sylius/config/container/parameters.yml.dist`, set your values and save as `parameters.yml`.

Run the vendors script, which uses **Composer** internally.

``` bash
$ php bin/vendors install
```

Generate database schema.

``` bash
$ php sylius/console doctrine:schema:create
```

Open up ``/path/to/Sylius/public/dev.php`` in your browser and play with the application.

### For users.

Download latest stable release from [our website](http://sylius.org) or **GitHub**.

Place it on your host, open ``/path/to/Sylius/public/installer.php`` and enjoy web installer.

Demo.
-----

There is a live demo [on our official website](http://sylius.org/demo). **NOT AVAILABLE!**

Testing and build status.
-------------------------

Sylius uses [travis-ci.org](http://travis-ci.org/Sylius/Sylius) for CI.

Before running tests, load the dependencies using [Composer](http://packagist.org).

``` bash
$ wget http://getcomposer.org/composer.phar
$ php composer.phar install
```

Now you can run the tests by simply using this command.

``` bash
$ phpunit -c sylius
```

Documentation.
--------------

Documentation is available on [Sylius.org](http://sylius.org/docs/index.html).

Contributing.
-------------

All informations about contributing to Sylius can be found on [this page](http://sylius.org/docs/contributing/index.html).

Mailing lists.
--------------

### Users.

If you are using Sylius and have any questions, feel free to ask on users mailing list.
[Mail](mailto:sylius@googlegroups.com) or [view it](http://groups.google.com/group/sylius).

### Developers.

If you want to contribute, and develop Sylius, use the developers mailing list.
[Mail](mailto:sylius-dev@googlegroups.com) or [view it](http://groups.google.com/group/sylius-dev).

Sylius twitter account.
-----------------------

If you want to keep up with updates, [follow the official Sylius account on twitter](http://twitter.com/_Sylius)
or [follow me](http://twitter.com/pjedrzejewski).

Bug tracking.
-------------

Sylius uses [GitHub issues](https://github.com/Sylius/Sylius/issues).
If you have found bug, please create an issue.

Versioning.
-----------

Releases will be numbered with the format `major.minor.patch`.

And constructed with the following guidelines.

* Breaking backwards compatibility bumps the major.
* New additions without breaking backwards compatibility bumps the minor.
* Bug fixes and misc changes bump the patch.

For more information on SemVer, please visit [semver.org website](http://semver.org/).

This versioning method is same for all **Sylius** bundles and applications.

License.
--------

License can be found [here](https://github.com/Sylius/Sylius/blob/master/LICENSE).

Authors.
--------

Sylius was originally created by [Paweł Jędrzejewski](http://diweb.pl).
See the list of [contributors](https://github.com/Sylius/SyliusAddressingBundle/contributors).
