<?php

namespace App\Providers;

use App\Models\Creature;
use App\Models\Pokemon;
use App\Policies\CreaturePolicy;
use App\Policies\PokemonPolicy;
use Illuminate\Support\Facades\Gate;
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
        Gate::policy(Creature::class, CreaturePolicy::class);
    }
}