@extends('layouts.result')

@section('title')
    {{$wynik}}
@endsection

@section('choose')

    Wybrałeś {{$user_chose}}<br>
    Komputer wybrał {{$comp_chose}}<br>
    <br><br>
    <a href="{{ route('route.history') }}" ><button class="button-result">HISTORIA WYNIKÓW</button></a>
@endsection

@section('back')
    <a href="/" ><button class="button-result">ZAGRAJ JESZCZE RAZ!</button></a>
@endsection


