@extends('layout.helloapp')

@section('title','Index')

@section('menubar')
@parent
インデックスページ
@endsection

@section('content')
<p>ここが本文のコンテンツ</p>
<p>必要なだけ記述できるよ</p>
@foreach ($data as $item)
{{$item['name']}}
{{$item['mail']}}
@endforeach
@endsection

@section('footer')
copyright 2020 timpo.
@endsection
