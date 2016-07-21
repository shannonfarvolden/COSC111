<?php

namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function boot(Router $router)
    {
        parent::boot($router);

        // User route-model binding
        $router->model('user', 'App\User');

        // Submission route-model binding
        $router->model('submission', 'App\Submission');

        // Thread route-model binding
        $router->model('thread', 'App\Thread');

        // Grade route-model binding
        $router->model('grade', 'App\Grade');

        // Quiz route-model binding
        $router->model('quiz', 'App\Quiz');

        // Survey route-model binding
        $router->model('survey', 'App\Survey');

        // Survey route-model binding
        $router->model('slide', 'App\Slide');
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function map(Router $router)
    {
        $router->group(['namespace' => $this->namespace], function ($router) {
            require app_path('Http/routes.php');
        });
    }
}
