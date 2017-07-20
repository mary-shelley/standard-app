# Standard Application

Just a standard Frankie application

```sh
$ composer create-project wdalmut/frankie-standard-app:dev-master myapp
```

Run it

```sh
$ cd myapp
$ php -S 0:8080 -t web
```

# What's inside?

This application comes with:

 * An `App\Module` you can use to start coding
 * Twig as default template engine
 * Database connection with Doctrine ORM
 * SMTP for mailing with Zend Mail
 * Logging with Monolog
 * Whoops for error management
 * Symfony Event Dispatcher for event management
 * Unit testing and Functional testing with PHPUnit

