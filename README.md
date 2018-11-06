[![Build Status](https://travis-ci.org/cedleg/symfony4-stack.svg?branch=master)](https://travis-ci.org/cedleg/symfony4-stack)

# Symfony4-stack

Symfony v4 starting stack from website-skeleton
* webpack-encore: yarn / bootstrap 4.1.3
* .htaccess re-writing
* enabled sccs support

## Installation

Clone the repo
```
git clone https://github.com/cedleg/symfony4-stack.git in /var/www
```
Install package
```
composer install
```
## Serve
Run the embedded server
```
php bin/console server:run
```
## Unit Test
Pass the tests
```
php vendor/bin/simple-phpunit
```
##  Generate coverate report
```
php vendor/bin/simple-phpunit --coverage-text=coverageApp.txt
```

## Contributing

* Cyril Itchi

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Motivation

* Learning to Symfony v4
