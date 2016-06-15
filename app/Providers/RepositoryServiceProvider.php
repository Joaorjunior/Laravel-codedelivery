<?php

namespace CodeDelivery\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'CodeDelivery\Repositories\CategoryRepository',
            'CodeDelivery\Repositories\CategoryRepositoryEloquent',

            'CodeDelivery\Repositories\ProductRepository',
            'CodeDelivery\Repositories\ProductRepositoryEloquent',

           // 'CodeDelivery\Repositories\ClientRepository',
           // 'CodeDelivery\Repositories\ClientRepositoryEloquent',

            'CodeDelivery\Repositories\UserRepository',

             'CodeDelivery\Repositories\OrderRepository'
             //'CodeDelivery\Repositories\OrderRepositoryEloquent'


        );

        $this->app->bind('CodeDelivery\Repositories\UserRepository',
            'CodeDelivery\Repositories\UserRepositoryEloquent');

        $this->app->bind('CodeDelivery\Repositories\OrderRepository',
            'CodeDelivery\Repositories\OrderRepositoryEloquent');

        $this->app->bind(
            'CodeDelivery\Repositories\CupomRepository',
            'CodeDelivery\Repositories\CupomRepositoryEloquent');






    }
}
