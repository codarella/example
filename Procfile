web: php artisan serve --host=0.0.0.0 --port=${PORT}
release: php artisan migrate --force
worker: php artisan queue:work --tries=3
