<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeclomContr extends Controller
{
    public function welcome ()
    {
        return view ('welcome');
    }
}
