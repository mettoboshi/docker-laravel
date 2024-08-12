# docker-laravel

docker compose exec app bash 
create-project --prefer-dist "laravel/laravel=9.*" .
composer i
php artisan key:generate
