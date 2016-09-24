# console

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

A context to create the most powerful command line interfaces.

## Install

Via Composer, update your composer.json to use martiadrogue/console

```json
"repositories": [
    {
        "type": "git",
        "url": "https://github.com/martiadrogue/console.git"
    }
],
```

Then you must add martiadrogue/console in require.

```json
"require": {
    "martiadrogue/console": "dev-devel"
},
```

Or invoke

```shell
composer require martiadrogue/console:@dev
```

Old school, forget all and grab files from [dist directory][link-download]

## Usage

``` php
$skeleton = new MartiAdrogue\Skeleton();
echo $skeleton->echoPhrase('Hello, world!');
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed
recently.

## Testing

`composer test` run phpcs, phpmd and phpunit. Run phpunit for unit test only.

``` bash
composer test
```

## Code Smell Fix

`composer format` run php-cs-fixer and phpcbf to fix up the PHP code to follow
the coding standards.

``` bash
composer format
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for
details.

## Security

If you discover any security related issues, please email
marti.adrogue@gmail.com instead of using the issue tracker.

## Credits

-   [Martí Adrogué][link-author]
-   [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more
information.

[ico-version]: https://img.shields.io/packagist/v/martiadrogue/console.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/martiadrogue/console.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/martiadrogue/console.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/martiadrogue/console.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/martiadrogue/console
[link-scrutinizer]: https://scrutinizer-ci.com/g/martiadrogue/console/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/martiadrogue/console
[link-downloads]: https://packagist.org/packages/martiadrogue/console
[link-author]: https://github.com/martiadrogue
[link-contributors]: ../../contributors
[link-download]: https://github.com/martiadrogue/console/archive/master.zip
