[![Build Status](https://img.shields.io/travis/yukkomeister/laravel-messenger.svg?style=flat-square)](https://travis-ci.org/yukkomeister/laravel-messenger)
[![Code Climate](https://img.shields.io/codeclimate/github/yukkomeister/laravel-messenger.svg?style=flat-square)](https://codeclimate.com/github/yukkomeister/laravel-messenger)
[![Latest Version](https://img.shields.io/github/release/yukkomeister/laravel-messenger.svg?style=flat-square)](https://github.com/yukkomeister/laravel-messenger/releases)
[![Total Downloads](https://img.shields.io/packagist/dt/yukkomeister/messenger.svg?style=flat-square)](https://packagist.org/packages/yukkomeister/messenger)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Get help on Codementor](https://cdn.codementor.io/badges/get_help_github.svg)](https://www.codementor.io/yukkomeister)

# Laravel Messenger
This package will allow you to add a full user messaging system into your Laravel application.

## Leave some feedback
[How are you using laravel-messenger?](https://github.com/yukkomeister/laravel-messenger/issues/55)

## Features
* Multiple conversations per user
* Optionally loop in additional users with each new message
* View the last message for each thread available
* Returns either all messages in the system, all messages associated to the user, or all message associated to the user with new/unread messages
* Return the users unread message count easily
* Very flexible usage so you can implement your own acess control

## Common uses
* Open threads (everyone can see everything)
* Group messaging (only participants can see their threads)
* One to one messaging (private or direct thread)

## Installation (Laravel 4.x)
Installation instructions for Laravel 4 can be [found here](https://github.com/yukkomeister/laravel-messenger/tree/v1).

## Installation (Laravel 5.x)
In composer.json:

    "require": {
        "yukkomeister/messenger": "~2.0"
    }

Run:

    composer update

Add the service provider to `config/app.php` under `providers`:

    'providers' => [
        yukkomeister\Messenger\MessengerServiceProvider::class,
    ]

Publish Assets

    php artisan vendor:publish --provider="yukkomeister\Messenger\MessengerServiceProvider"
	
Update config file to reference your User Model:

    config/messenger.php
	
Create a `users` table if you do not have one already. If you need one, simply use [this example](https://github.com/yukkomeister/laravel-messenger/tree/master/src/yukkomeister/Messenger/examples/create_users_table.php) as a starting point, then migrate.

**(Optional)** Define names of database tables in package config file if you don't want to use default ones:

    'messages_table' => 'messenger_messages',
    'participants_table' => 'messenger_participants',
    'threads_table' => 'messenger_threads',

Migrate your database:

    php artisan migrate

Add the trait to your user model:

    use yukkomeister\Messenger\Traits\Messagable;
    
    class User extends Model {
        use Messagable;
    }


## Examples
* [Controller](https://github.com/yukkomeister/laravel-messenger/tree/master/src/yukkomeister/Messenger/examples/MessagesController.php)
* [Routes](https://github.com/yukkomeister/laravel-messenger/tree/master/src/yukkomeister/Messenger/examples/routes.php)
* [Views](https://github.com/yukkomeister/laravel-messenger/tree/master/src/yukkomeister/Messenger/examples/views)

__Note:__ These examples use the [laravelcollective/html](http://laravelcollective.com/docs/5.0/html) package that is no longer included in Laravel 5 out of the box. Make sure you require this dependency in your `composer.json` file if you intend to use the example files.

## Example Projects
* [WIP] [Pusher](https://github.com/yukkomeister/laravel-messenger-pusher-demo)
* [WIP] [Lumen API](https://github.com/yukkomeister/lumen-messenger-api)


## Contributing? 
Please format your code before creating a pull-request. This will format all files as specified in `.php_cs`:

    vendor/bin/php-cs-fixer fix .

## Security

If you discover any security related issues, please email [Chris Gmyr](mailto:yukkomeister@gmail.com) instead of using the issue tracker.

## Credits

- [Chris Gmyr](https://github.com/yukkomeister)
- [All Contributors](../../contributors)

### Special Thanks
This package used [AndreasHeiberg/laravel-messenger](https://github.com/AndreasHeiberg/laravel-messenger) as a starting point.
