<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Relation::enforceMorphMap([
            'post' => 'App\Models\Post',
            'comment' => 'App\Models\Comment',
            'reply' => 'App\Models\Reply',
            'user' => 'App\Models\User',
        ]);


        // General for all resources
        // JsonResource::wrap('List Items');
        // JsonResource::withoutWrapping();
    }
}
