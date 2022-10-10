@extends('layout.helloapp')

@section('title','Index')

@section('menubar')
@parent
インデックスページ
@endsection

@section('content')
<p>ここが本文のコンテンツ</p>
<p>必要なだけ記述できるよ</p>
<p>controllerValue: {{$message}}</p>
<p>view composer value : {{$view_message}}</p>
@endsection

@section('footer')
copyright 2020 timpo.
@endsection
