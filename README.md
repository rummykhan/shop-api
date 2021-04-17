

## Setup

- Clone this repo using `git clone git@github.com:rummykhan/shop-api.git`
- Goto project dir `cd shop-api`
- Create .env file `cp .env.example .env`
- Run `composer install`
- Create app key `php artisan key:generate`
- Create database & Update db credentials in `.env`
- Run migrations `php artisan migrate`
- Run item seeder `php artisan db:seed`
- Run your app using `php -S localhost:1234 -t public`
- Goto browser `http://localhost:1234`, you should see the app.


#### Contact Us
[rehan_manzoor@outlook.com](mailto:rehan_manzoor@outlook.com)
