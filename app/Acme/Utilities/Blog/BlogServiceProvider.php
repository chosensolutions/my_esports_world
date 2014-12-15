<?php namespace Acme\Utilities\Blog;

use Illuminate\Support\ServiceProvider;

class BlogServiceProvider extends ServiceProvider {

    /**
     * Registers and Binds all the relevant interfaces in the IOC container;
     * making sure all Repositories and any modules and/or utilities will
     * automatically be resolved via the IOC container
     */
    public function register()
    {
        $this->app->bind(
            'Acme\Utilities\Blog\BlogRepositoryInterface',
            'Acme\Utilities\Blog\EloquentBlogRepository'
        );
        /* Comment
        $this->app->bind(
            'Acme\Utilities\Blog\BlogRepositoryInterface',
            'Acme\Utilities\Blog\EloquentBlogRepository'
        );
        */
    }
}