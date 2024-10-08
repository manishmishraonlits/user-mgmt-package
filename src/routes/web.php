<?php

use UserMgmtPackage\Http\Controllers\UserController;

Route::get('user', [UserController::class, "index"]);