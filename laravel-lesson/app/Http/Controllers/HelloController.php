<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        return "<title>Hello/Index</title>
        <h1>Index</h1>
        <p>this is index action</p>";
    }
}
