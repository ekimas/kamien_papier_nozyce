@extends('layouts.h')

@section('title')
    WYNIKI
@endsection

@section('result')
    @foreach($results as $result)
        {{$result -> wyniki}}
        <hr><br>
    @endforeach
@endsection

@section('time')
    @foreach($time as $t)
        {{$t -> created_at}}
        <hr><br>
    @endforeach
@endsection

@section('back')
    <a href="/" ><button class="button-result">ZAGRAJ JESZCZE RAZ!</button></a>
@endsection