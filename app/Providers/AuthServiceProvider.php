<?php

namespace be_nomad_app\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use be_nomad_app\Role;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'be_nomad_app\Model' => 'be_nomad_app\Policies\ModelPolicy',

    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
        Gate::define('validate_user', function ($user) {
            $role = Role::where('id',1)->first();
            //dd($role->user_id);
            return $user->id == $role->id;
        });


        /*Gate::define('validate_partner', function ($user) {
            $role = Role::where('id',2)->first();
            //dd($role->user_id);
            return $user->role == $role->id;
        });*/   

    }
}
