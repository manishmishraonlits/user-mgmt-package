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
      $this->loadRoutesFrom(dirname(__DIR__) . '/routes/web.php');
      $this->loadViewsFrom(dirname(__DIR__) . '/resources/views', 'users.users');
   }
}
