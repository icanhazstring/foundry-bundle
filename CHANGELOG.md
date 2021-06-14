# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]
### Added
### Changed
### Deprecated
### Removed
### Fixed
### Security

## [0.1.0] - 2021-06-14
### Added
- Added `RemoveWellKnownSchemaFilterPass` to remove blacklist filter for 
  certain tables that are used by several symfony components. These won't get
  dropped using ResetDatabase trait of foundry.
