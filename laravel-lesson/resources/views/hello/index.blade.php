@extends('layout.helloapp')

@section('title','Index')

@section('menubar')
@parent
インデックスページ
@endsection

@section('content')
<p>ここが本文のコンテンツ</p>
<p>必要なだけ記述できるよ</p>
<ul>
    @each('components.item', $data, 'item')
</ul>
@include('components.message',['msg_title'=>'ok','msg_content'=>'this is subview'])
@endsection

@section('footer')
copyright 2020 timpo.
@endsection
