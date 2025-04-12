<?php

namespace App\Providers;

use App\Models\Apply;
use App\Models\Job;
use App\Models\Setting;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Session;
use Config;
use Illuminate\Pagination\Paginator;
use App\Helpers\Helper;

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
		if ($this->app->environment() == 'local') {
		$this->app->register('Hesto\MultiAuth\MultiAuthServiceProvider');
		}
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
		Paginator::useBootstrap();
		
        View::composer('*', function ($view) {
			
			
			if(!empty(Session::get('appLocale')))
			{
			$lang = '_'.Session::get('appLocale');
			}
			else
			{
			$lang = '_'.Config::get('app.locale');
			} 
			$view->with('lang', $lang);
			
			$setting = Setting::orderBy('id' , 'desc')->first();
			$view->with('setting', $setting);
			
			
        });
    }
}
