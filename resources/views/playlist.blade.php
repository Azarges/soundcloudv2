@extends('layouts.app')

@section('content')
    @if( Auth::id() === $playlist->utilisateur_id)
    @if( Route::currentRouteName() == 'playlist')
        <a href="/ajouterChansonP/{{ $playlist->id }}">Ajouter une chanson à la playlist</a>
    @endif
    @endif

    @if(count($playlist->chansons )== 0)
        Votre playlist est vide !
    @else
    @foreach($playlist->chansons as $c)
        <a href="/musique/{{ $c->id }}">{{ $c->nom }}</a><br>
    @endforeach
    @endif


@endsection
