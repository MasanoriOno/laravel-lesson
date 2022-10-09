@extends('layout.helloapp')

@section('title','Index')

@section('menubar')
@parent
インデックスページ
@endsection

@section('content')
<p>ここが本文のコンテンツ</p>
<p>必要なだけ記述できるよ</p>
@component('components.message')
@slot('msg_title')
COUTION!
@endslot
@slot('msg_content')
これはメッセージの表示
@endslot
@endcomponent
@endsection

@section('footer')
copyright 2020 timpo.
@endsection
