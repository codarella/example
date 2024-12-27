<?php

namespace App\Providers;
use Gate;
use App\Models\Job;
use App\Models\User;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model; 

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
        Model::preventLazyLoading();

        Paginator::useTailwind();
        Gate::define('edit-job',function(User $user, Job $job){
            return ($job->employer->user->is($user));

        });
    }
}
