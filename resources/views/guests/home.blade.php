@extends('layouts.app')

@section('content')
  <div class="display-4 p-5 text-center">
    Benvenuto
  </div>
  @guest
    <p class="p-5 text-center" class="lead">Guest</p>
  @else
    <p class="text-center" class="lead">Il tuo nome è {{ Auth::user()->name }}</p>
  @endguest
@endsection
