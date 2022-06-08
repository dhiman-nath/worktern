<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Job;
use App\Project;
use View;
use Session;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('user.include.manage-jobs', function ($view){
            $view->with('pendingJobs', count(Job::where('buyer_id',Auth::id())->where('status',0)->get()));
            $view->with('ongoingJobs', count(Project::where('buyer_id',Auth::id())->where('status',0)->get()));
            $view->with('completedJobs', count(Project::where('buyer_id',Auth::id())->where('status',1)->get()));
            $view->with('cancelledJobs', count(Project::where('buyer_id',Auth::id())->where('status',2)->get()));
        });
    }
}
