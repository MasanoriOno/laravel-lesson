<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

global $hoge, $huga;
$hoge = 'hoge';
$huga = 'huga';

class HelloController extends Controller
{
    public function __invoke()
    {
        return "<p>this is single action from invoke</p>";
    }
    // public function index()
    // {
    //     return "<title>Hello/Index</title>
    //     <h1>Index</h1>
    //     <p>this is index action</p>";
    // }
    // public function index($id = 'noname', $pass = 'unknown')
    // {
    //     return "<title>Hello/Index</title>
    //     <h1>Index</h1>
    //     <p>this is index action</p>
    //     <ul>
    //         <li>id:{$id}</li>
    //         <li>pass:{$pass}</li>
    //     </ul>";
    // }

    // public function other()
    // {
    //     global $hoge, $huga;
    //     return "<p>{$hoge}</p><p>{$huga}</p>";
    // }
}
