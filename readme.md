# Takeoff app

> Built using the [Laravel](https://github.com/laravel/laravel) framework.

The Takeoff app allows administrators track individuals progress and awards.

See the application in action by visiting the [home page](https://www.sandbox.csun.edu/metalab/demo/takeoff).

## Installation

To install this application please refer to the official [Laravel website](https://laravel.com/docs/5.7).


## Getting Started
Welcome to the project. Start by installing the necessary repo dependencies:

```bash
# Front-End Setup
$ yarn

# Back-End Setup
$ composer install

# Database Setup
$ php artisan migrate:fresh --seed

# Passport Setup 
$ php artisan passport:keys 

# Passport Client Setup
$ php artisan passport:client --personal

# Testing Credentials: 
$ email: admin@gmail.com
$ password: password

```
Learn more about [Yarn](https://yarnpkg.com/en/docs/getting-started) or [Composer](https://getcomposer.org/).


## License

The Takeoff app is open-sourced software licensed under the 
[GNU General Public License v3+](https://www.gnu.org/licenses/gpl.html). A copy can be found in the `COPYING` file.

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
