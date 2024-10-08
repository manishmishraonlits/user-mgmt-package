<?php

namespace UserMgmtPackage\Providers;

use Illuminate\Support\ServiceProvider;

class UserManagementProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     * 
     * @return void
     */

     public function boot()
     {
        $this->loadRoutesFrom(_DIR_.'/../routes/web.php');
        $this->loadViewsFrom(_DIR.'/../resources/views', 'users.users');
     }
}