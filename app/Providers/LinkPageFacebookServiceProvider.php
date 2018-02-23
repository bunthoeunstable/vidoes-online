<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Modules\Security\Models\Setting;

class LinkPageFacebookServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('Site::inc.facebooklikepage',function($view){
          $fb = Setting::select(['facebook_id'])->where(['status'=>1])->first();
            $view->with(compact('fb'));
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
