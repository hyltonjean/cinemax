Cinemax - A Cinema booking project
========================

Requirements
------------

  * PHP 7.4.19 or lower;
  * Apache 2.4.47 or lower;
  * MySQL 5.7.33 or lower;
  * Symfony 5.4 or lower;

Installation
------------

Install and update composer: 
```bash
$ composer install
$ composer update
```
[Download Symfony](https://symfony.com/download) to install the `symfony` binary on your computer and run
this command to migrate to the DB:
```bash
$ symfony console doctrine:migrations:migrate
```

Alternatively, you can use Composer:
```bash
$ php bin/console doctrine:migrations:migrate
```

The DB .sql file is located in /public/db directory if you do not want to migrate the DB manually.

Change .env file to match your DB credentials e.g.

```bash
$ DATABASE_URL="mysql://DB_USERNAME:DB_PASSWORD@127.0.0.1:DB_PORT/DB_NAME?serverVersion=8&charset=utf8mb4"
```

Access
------------

There's no need to configure anything else to run the application. If you have
installed Symfony binary, run this command:

```bash
$ symfony serve
```

To make a booking just register yourself and simply login.

Then access the application in your browser at the given URL (<https://localhost:8000> by default).

If you don't have the Symfony binary installed, run `php -S localhost:8000 -t public/`
to use the built-in PHP web server or [configure a web server](https://symfony.com/doc/current/setup/web_server_configuration.html) like Nginx or
Apache to run the application.
