<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('manage-users',function($user){
            return $user->hasAnyRoles(['admin','user']);
        });

        Gate::define('edit-users',function($user){
            return $user->hasAnyRoles(['admin',]);
        });
        Gate::define('delete-users',function($user){
            return $user->hasRole('admin');
        });
    }
}
