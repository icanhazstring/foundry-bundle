# Migration

This file contains information about how to migrate from one major
to another.

## 0.1 -> 0.2
The package was renamed, so you need to remove the old one and require the new one:

Remove the bundle from `config/bundles.php` and run:
- `composer rem icanhazstring/symfony-foundry-bundle`
- `composer req icanhazstring/foundry-bundle`

Add the new bundle to `config/bundles.php` again: see [README.md](README.md)
