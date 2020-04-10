@extends('layouts.app')

@section('content')

    @if( Route::currentRouteName() == 'playlist')
        <a href="/ajouterChansonP/{{ $playlist->id }}">Ajouter une chanson à la playlist</a>
    @endif

    @if(count($playlist->chansons )== 0)
        Votre playlist est vide !
        @else
    @foreach($playlist->chansons as $c)
        <a href="/musique/{{ $c->id }}">{{ $c->nom }}</a><br>
    @endforeach
    @endif
@endsection
