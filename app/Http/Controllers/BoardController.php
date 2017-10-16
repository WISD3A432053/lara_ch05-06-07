<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Route;

class BoardController extends Controller
{
    public function getIndex(){
        return "排行榜";
    }

    public function getName(){
        return Route::currentRouteAction();
    }
}
