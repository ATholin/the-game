# The Game

Track your [The Game](https://en.wikipedia.org/wiki/The_Game_(mind_game)) progress.

## Getting started

### Launch the project

*(Assuming you've [installed Laravel](https://laravel.com/docs/installation))*


``` bash
git clone https://www.github.com/ATholin/the-game.git
cd game
composer install
```

Next you need to make a copy of the `.env.example` file and rename it to `.env` inside your project root.

``` bash
cp .env.example .env
```

Generate application key

```
php artisan key:generate
```

Start development server

```
php artisan serve
```

## Testing

``` bash
php artisan test
```

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
