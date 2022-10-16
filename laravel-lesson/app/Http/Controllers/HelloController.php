<?php

namespace App\Http\Controllers;

use App\Http\Requests\HelloRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::select('select * from people');
        return view('hello.index', ['items' => $items]);
    }

    public function post(Request $request)
    {
        // $messages = [
        //     'name.required' => '名前が必須',
        //     'mail.email' => 'メアド書いて',
        //     'age.numeric' => '数値でおなしゃす',
        //     'age.min' => 'ゼロ以上で入力して',
        //     'age.max' => '200以下で入力して',
        // ];
        $validate_rule = ['msg' => 'required'];
        $this->validate($request, $validate_rule);
        $msg = $request->msg;
        $response = response()->view('hello.index', ['msg' => $msg . ' cookieを保存']);
        $response->cookie('msg', $msg, 100);
        // $validator->sometimes('age', 'min:0', function ($input) {
        //     return is_numeric($input->age);
        // });
        // $validator->sometimes('age', 'max:200', function ($input) {
        //     return is_numeric($input->age);
        // });
        // if ($validator->fails()) {
        //     return redirect('/hello')->withErrors($validator)->withInput();
        // }

        return $response;
        // return view('hello.index', ['msg' => '正しい']);
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
