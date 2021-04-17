<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ApiTokenController extends Controller
{
    public function index()
    {
        return view('api-tokens.index');
    }

    public function createApiToken()
    {
        Auth::user()->api_token = Str::random(32);
        Auth::user()->save();

        return back()->with('success', 'New API token generated successfully!');

    }
}
