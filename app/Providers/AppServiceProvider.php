<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Query\Builder as QueryBuilder;
use Illuminate\Database\Query\Expression;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        QueryBuilder::macro('addSubSelect', function ($field, $callback) {
            $query = $callback();

            if (is_null($this->columns)) {
                $this->select($this->from.'.*');
            }

            if ($query instanceof EloquentBuilder) {
                $query = $query->getQuery();
            }

            if ($query instanceof QueryBuilder) {
                $query = $query->limit(1);
            }

            if ($query instanceof Expression) {
                $query = $query->getValue();
            }

            $this->selectSub($query, $field);
        });
    }
}
