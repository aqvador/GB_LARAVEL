<?php
declare(strict_types=1);

namespace App\Providers;


use App\Http\Contracts\PostsRepository;
use App\Http\Repository\PostRepository;

class ContainerDependencyInjection extends \Illuminate\Support\ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(PostsRepository::class, PostRepository::class);
    }
}
