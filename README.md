# Build a Monthly Subscription App with Laravel Cashier

This is the code repo for the [Scotch School](https://school.scotch.io) course: [Build a Monthly Subscription App with Laravel Cashier](https://school.scotch.io/build-a-monthly-subscription-app-with-laravel-cashier). 

## Requirements 

- [PHP](https://secure.php.net/)
- [Composer](https://getcomposer.org/)
- [A Stripe Account](https://stripe.com/)

## Installation

- Clone the repo: `git clone git@github.com:scotch-io/laravel-cashier-course`
- Go into the repo: `cd laravel-cashier-course`
- Install dependencies: `composer install`
- Copy `.env.example` to `.env`: `cp .env.example .env`
- Create a key: `php artisan key:generate`
- Fill in `STRIPE_KEY` and `STRIPE_SECRET` in `.env`
- Start the app: `php artisan serve`
- Visit the app: <http://localhost:8000>

## Stripe Keys

We will need a payment processor. Create a [Stripe](https://stripe.com) account and get your API keys under **Account Settings**.

