# symfony-foundry-bundle

Delivers `zenstruck/foundry` alongside some additional configs and compile passes.
to avoid some common problems when using `zenstruck/foundry` with symfony components.

## Installation

```bash
$ composer req icanhazstring/symfony-foundry-bundle
```

## Config
Enable the bundle by adding it to the list of registered bundles
in the `config/bundles.php` file of your project:

```php
return [
    // ...
    icanhazstring\Symfony\Foundry\Bundle\SymfonyFoundryBundle::class => ['test' => true],
];
```
