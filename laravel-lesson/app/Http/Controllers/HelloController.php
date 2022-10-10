<?php

namespace App\Http\Controllers;

use App\Http\Requests\HelloRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        // $validator = Validator::make($request->query(), [
        //     'id' => 'required',
        //     'pass' => 'required',
        // ]);
        // if ($validator->fails())
        //     $msg = 'クエリー文字列に問題';
        // else
        //     $msg = 'ID,PASS OK!';
        return view('hello.index', ['msg' => 'フォーム入力しろ']);
    }

    public function post(HelloRequest $request)
    {
        // $messages = [
        //     'name.required' => '名前が必須',
        //     'mail.email' => 'メアド書いて',
        //     'age.numeric' => '数値でおなしゃす',
        //     'age.min' => 'ゼロ以上で入力して',
        //     'age.max' => '200以下で入力して',
        // ];
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required',
        //     'mail' => 'email',
        //     'age' => 'numeric',
        // ], $messages);
        // $validator->sometimes('age', 'min:0', function ($input) {
        //     return is_numeric($input->age);
        // });
        // $validator->sometimes('age', 'max:200', function ($input) {
        //     return is_numeric($input->age);
        // });
        // if ($validator->fails()) {
        //     return redirect('/hello')->withErrors($validator)->withInput();
        // }

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
