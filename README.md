# CollegePortal Models

This laravel package contains Eloquent Models and Traits and help power data-access for the College-Portal project.

## Setup

- Run `composer require college-portal/api-models` in your terminal to pull the package in.

## Standards

- This package is built and linted with the PSR-2 standard.
  - Run `composer run lint` to check linter errors
  - Run `composer run fix-lint` to fix linter errors
- A static analyser is used to make sure code works statically.
  - Run `composer run analyse` to verify.

## Code Documentation

See [Code Documentation](./docs), which is generated with [this package](https://github.com/evert/phpdoc-md).

To generate the docs after making code changes, run `composer run docs`