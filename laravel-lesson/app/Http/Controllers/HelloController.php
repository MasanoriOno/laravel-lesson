<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    // public function index()
    // {
    //     return "<title>Hello/Index</title>
    //     <h1>Index</h1>
    //     <p>this is index action</p>";
    // }
    public function index($id = 'noname', $pass = 'unknown')
    {
        return "<title>Hello/Index</title>
        <h1>Index</h1>
        <p>this is index action</p>
        <ul>
            <li>id:{$id}</li>
            <li>pass:{$pass}</li>
        </ul>";
    }
}
