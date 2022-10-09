<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index()
    {
        $data = [
            ['name' => '山田1', 'mail' => 'taro@yamada1'],
            ['name' => '山田2', 'mail' => 'taro@yamada2'],
            ['name' => '山田3', 'mail' => 'taro@yamada3'],
        ];
        return view('hello.index', ['data' => $data]);
    }

    // public function post(Request $request)
    // {
    //     $msg = ['msg' => $request->msg];
    //     return view('hello.index', $msg);
    // }
    // public function __invoke()
    // {
    //     return "<p>this is single action from invoke</p>";
    // }
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
}
