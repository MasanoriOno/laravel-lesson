@extends('layout.helloapp')

@section('title','Index')

@section('menubar')
@parent
インデックスページ
@endsection

@section('content')
{{-- <p>{{$msg}}</p>
@if (count($errors)>0)
<p>入力に問題があるぞ</p>
@endif
<form action="/hello" method="post"> --}}
<table>
    {{-- @error('msg') --}}
    <tr><th>Name</th><th>Mail</th><th>Age</th></tr>
    {{-- @enderror --}}
    @foreach ($items as $item)
    <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->mail}}</td>
        <td>{{$item->age}}</td>
    </tr>
    @endforeach
</table>
</form>
@endsection

@section('footer')
copyright 2020 timpo.
@endsection
