@extends('layouts.app')

@section('content')
    User n°{{ $user->id }}<br>
    User n°{{ $user->name }}<br>
    User n°{{ $user->email }}<br>
    @foreach($user->chansons as $c)
        {{ $c->nom }}<br>
    @endforeach

    @foreach($user->ilsMeSuivent as $followed)
        Followers : {{ $followed->name }}<br>
    @endforeach


    @foreach($user->jeLesSuit as $follow)
        Following : {{ $follow->name }}<br>
    @endforeach

@endsection
