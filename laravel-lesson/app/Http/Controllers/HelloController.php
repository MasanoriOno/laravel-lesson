<?php

namespace App\Http\Controllers;

use App\Http\Requests\HelloRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        return view('hello.index', ['msg' => 'フォームを入力']);
    }

    public function post(HelloRequest $request)
    {
        return view('hello.index', ['msg' => '正しい']);
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
