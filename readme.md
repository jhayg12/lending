## Requirements
XAMPP Web Server 
composer https://getcomposer.org/download/
Laravel Installation https://laravel.com/docs/5.8/installation
PHP 7

## Installation

1. Using your preferred terminal , go to the lending folder and run the following command to set a random secure Application Key `php artisan key:generate`
2. Rename `.env.example` to `.env` file in your favorite text editor and set the database credentials.
Change the ff:

DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

3. `php artisan migrate --seed` run this command to migrate & seed the database. ( Make sure that you're inside the app's root directory )
4. Install NPM globally if you haven't installed that already , for more information please refer this [Link](https://docs.npmjs.com/downloading-and-installing-node-js-and-npm)
5. After installing NPM globally , run `npm install` inside your webroot , it will download all the required dependencies.
6. Run `npm run dev` for compiling sass and js files.
7. Laraspace makes use of `Laravel Mix` for compiling sass files and js files (webpack).
8. You are ready to launch!

## User Accounts

Administrators
1. email: renan.acuin@lending.co
   password: admin@123
   
2. email: jayson.suyat@lending.co
   password: admin@123
