<?php

declare(strict_types=1);

namespace App\controller;

use App\App;
use App\View;


class HomeController
{
    public static function index()
    {
        // connect to database and amke transction
        $db1 = App::db();
        
        // render index home view 
        return View::make('home');
    }
}
