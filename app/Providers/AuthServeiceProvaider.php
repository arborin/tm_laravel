<?php

namespace App\Providers;

use App\Models\Job;
use App\Policies\JobPolicy;
// use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServeiceProvaider extends ServiceProvider
{
    protected $policies = [
        Job::class => JobPolicy::class
    ];

    /**
     * Register services.
     */
    public function register(): void {}

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
    }
}