Cinemax - A Cinema booking project build with Symfony 5.4
========================

Requirements
------------

  * PHP 7.4.19 or higher;
  * Apache 2.4.47 or higher;
  * and the [usual Symfony application requirements](https://symfony.com/book).

Installation
------------

[Download Symfony](https://symfony.com/download) to install the `symfony` binary on your computer and run
this command:

```bash
$ symfony new --demo my_project
```

Alternatively, you can use Composer:

```bash
$ composer create-project symfony/symfony-demo my_project
```

Usage
-----

There's no need to configure anything to run the application. If you have
installed Symfony binary, run this command:

```bash
$ cd my_project/
$ symfony serve
```

Then access the application in your browser at the given URL (<https://localhost:8000> by default).

If you don't have the Symfony binary installed, run `php -S localhost:8000 -t public/`
to use the built-in PHP web server or [configure a web server](https://symfony.com/doc/current/setup/web_server_configuration.html) like Nginx or
Apache to run the application.
