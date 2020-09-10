@extends('layouts.app')
@section('content')
  @if (Auth::check())
    <a  style="margin-top: 20%" href="/logout" class="btn famie-btn mt-30">Выйти</a>
  @endif
@endsection
