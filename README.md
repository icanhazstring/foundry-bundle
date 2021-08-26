# foundry-bundle

Delivers `zenstruck/foundry` alongside some additional configs and compiler passes.
to avoid some common problems when using `zenstruck/foundry` with symfony components.

## Installation

```bash
$ composer req --dev icanhazstring/foundry-bundle
```

## Config
Enable the bundle by adding it to the list of registered bundles
in the `config/bundles.php` file of your project:

```php
return [
    // ...
    icanhazstring\FoundryBundle\FoundryBundle::class => ['test' => true],
];
```

## Suggestions
- https://github.com/tseho/doctrine-assigned-identity (`tseho/doctrine-assigned-identity`)

  This package allows you to manually assign IDs to a Doctrine entity, even when the entity uses the stategies AUTO, SEQUENCE, IDENTITY or UUID.
