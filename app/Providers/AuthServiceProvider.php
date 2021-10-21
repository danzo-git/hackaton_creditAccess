<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

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

            return $user->hasAnyRole(['nouveau-agent','admin','rh',''])  ;
        });


        $this->registerPolicies();
        Gate::define('delete-users',function($user){
            return $user->isAdmin();
        });
        //
        Gate::define('manage-contrat',function($user){

            return $user->hasAnyRole(['admin'])  ;
        });
        Gate::define('manage-client',function($user){
            return $user->hasAnyRole(['admin','g-compte'])  ;
        });
        Gate::define('edit-users',function($user){

            return $user->hasAnyRole(['g-compte','admin','rh'])  ;
        });
        Gate::define('manage-agent',function($user){

            return $user->hasAnyRole(['admin','rh'])  ;
        });
    }
}
