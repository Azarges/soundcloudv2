@extends('layouts.app')

@section('content')
    @if(count($playlist->chansons )== 0)
        Vide
        @else
    @foreach($playlist->chansons as $c)
        <a href="/musique/{{ $c->id }}">{{ $c->nom }}</a><br>
    @endforeach
    @endif
@endsection
