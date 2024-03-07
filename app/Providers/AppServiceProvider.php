<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;


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
        
        // Blade::directive('datetime',function($expression){
        //     $expression = trim($expression,'\'');
        //     $expression = trim($expression,'"');
        //     $dateOject = date_create($expression);
        //     if(!empty($dateOject)){
        //         $dateFormat = $dateOject->format('d/m/Y H:i:s');
        //         return $dateFormat;
        //     }
        //     return false;
        // });
        Blade::if('env',function($value){
           // trả về giá trị boolean
           if(config('app.env')===$value){
            return true;
           }
           return false;
        });
    }
}

