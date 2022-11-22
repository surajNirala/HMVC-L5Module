<?php

namespace App\Modules\HelloWorld\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HelloWorldController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        return view("HelloWorld::welcome");
    }
}
