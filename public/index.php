<?php
    require_once __DIR__ . "/../vendor/autoload.php";

    use Fajri\App\Route;
    use Fajri\Controller\AddController;
    use Fajri\Controller\HomeController;
    use Fajri\Controller\TebakController;

    Route::add("/", "GET", HomeController::class, "index");
    Route::add("/grup/([a-z A-Z 0-9]*)", "GET", TebakController::class, "index");
    Route::add("/grup/([a-z A-Z 0-9]*)", "POST", TebakController::class, "post");
    
    Route::add("/add", "GET", AddController::class, "index");
    Route::add("/add", "POST", AddController::class, "post");
    
    Route::add("/delete/([a-z A-Z 0-9]*)", "GET", TebakController::class, "delete");
    
    Route::run();
?>