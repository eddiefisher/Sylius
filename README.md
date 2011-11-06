Sylius.
=======

Simple but **end-user and developer friendly** webshop engine built on top of Symfony2.
This is official repository.

**Sylius is still under heavy development so many things will be broken.**

If you want to see how the bundles work check [Sylius-Sandbox](http://github.com/Sylius/Sylius-Sandbox) application.

Quick installation.
-------------

Clone this repository with this command or download latest release from github.

``` bash
$ git clone http://github.com/Sylius/Sylius.git /path/to/Sylius
```

Open `app/config/container/includes/parameters.yml.dist`, set your values and save as `parameters.yml`.
Run the vendors script.

``` bash
$ php ./tools/vendors install
```

Generate database schema.

``` bash
$ php app/tools/console doctrine:schema:create
```

Open up ``/path/to/Sylius/public`` in your browser and play with the application.

**Installer.**

Open `/path/to/Sylius/public/installer.php` in your browser and follow the instructions.
**Installer is not supported at the moment!**

Documentation.
--------------

Temporary docs are available [here](https://github.com/Sylius/Sylius/blob/master/doc/index.md).

Mailing lists.
--------------

If you are using Sylius and have any questions, feel free to ask on users mailing list.
[Mail](mailto:sylius@googlegroups.com) or [view it](http://groups.google.com/group/sylius).

If you want to contribute, and develop Sylius, use the developers mailing list.
[Mail](mailto:sylius-dev@googlegroups.com) or [view it](http://groups.google.com/group/sylius-dev).

Sylius twitter account.
-----------------------

If you want to keep up with updates, [follow the official Sylius account on twitter](http://twitter.com/_Sylius) 
or [follow me](http://twitter.com/pjedrzejewski).

Bug tracking.
-------------

Sylius uses [GitHub issues](https://github.com/Sylius/SyliusThemingBundle/issues).
If you have found bug, please create an issue.

Versioning.
-----------

Releases will be numbered with the format `<major>.<minor>.<patch>`.

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

The Sylius was originally created by [Paweł Jędrzejewski](http://diweb.pl).
See the list of [contributors](http://github.com/Sylius/Sylius/contributors).
