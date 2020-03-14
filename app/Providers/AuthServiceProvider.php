<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\User;

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

        //
        // 系統管理者 Gate 規則
        Gate::define('admin', function ($user) {
            return $user->role === User::ROLE_ADMIN;
        });

        // 老師 Gate 規則
        Gate::define('teacher', function ($user) {
            return $user->role === User::ROLE_TEACHER;
        });

        // 一般使用者 Gate 規則
        Gate::define('assistant', function ($user) {
            return $user->role === User::ROLE_ASSISTANT;
        });

        // 一般使用者 Gate 規則
        Gate::define('student', function ($user) {
            return $user->role === User::ROLE_STUDENT;
        });

    }
}
