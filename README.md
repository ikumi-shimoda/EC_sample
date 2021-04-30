## Installation

### docker-compose
```
$ cd ec_sample/laravel
$ composer install
```

```
# /ec_sample

$ docker-compose up -d
```

### Container setup
```
$ docker-compose exec web php artisan key:generate
$ docker-compose exec web php artisan migrate
```
### Seeder
```
$ docker-compose exec web php artisan db:seeder
```
