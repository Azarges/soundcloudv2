@extends('layouts.app')

@section('content')
    User n°{{ $user->id }}<br>
    User n°{{ $user->name }}<br>
    User n°{{ $user->email }}<br>
    @foreach($user->chansons as $c)
        {{ $c->nom }}<br>
    @endforeach
@endsection
