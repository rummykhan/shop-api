<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EndpointController extends Controller
{
    public function __invoke()
    {
        return view('endpoints.index');
    }
}
