# Installation
1. Install PHP 8.3+, Composer, Node, MySQL 8.
2. `composer install && npm install`
3. `cp .env.example .env && php artisan key:generate`
4. Configure DB, then run `php artisan migrate --seed`.
5. `php artisan vendor:publish --provider="Laravel\\Sanctum\\SanctumServiceProvider"` and Spatie permission migrations if needed.
6. Run `npm run build` and serve with queues/scheduler enabled.
