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
        $router->bind('user', function ($id)
        {
            return \App\User::findOrFail($id);
        });

        // Submission route-model binding
        $router->bind('submission', function ($id)
        {
            return \App\Submission::findOrFail($id);
        });

        // Thread route-model binding
        $router->bind('threads', function ($id)
        {
            return \App\Thread::findOrFail($id);
        });

        // Grade route-model binding
        $router->bind('grade', function ($id)
        {
            return \App\Grade::findOrFail($id);
        });

        // Quiz route-model binding
        $router->bind('quiz', function ($id)
        {
            return \App\Quiz::findOrFail($id);
        });

        // Survey route-model binding
        $router->bind('survey', function ($id)
        {
            return \App\Survey::findOrFail($id);
        });


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
