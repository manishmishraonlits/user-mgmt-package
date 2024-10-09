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
      $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
      $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'users.users');
   }
}
