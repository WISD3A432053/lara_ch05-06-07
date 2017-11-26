<?php

namespace App\Http\Controllers\cool;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Routes\Web;

class TestController extends Controller
{
    public function  index(){
        return 'Cooler';
    }
}
