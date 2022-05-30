<?php

namespace App\Providers;

use App\Models\Team;
use App\Policies\TeamPolicy;
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
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
    $this->registerPostPolicies();

        //
    }
     public function registerPostPolicies()
        {
            Gate::define('admin', function ($user) {
                return $user->hasAccess(['admin']);
            });

             Gate::define('user', function ($user) {
                return $user->hasAccess(['user']);
            });
        }
}
