@extends('layouts.app')

@section('content')

    Résultat de recherche pour {{$result}}<br>
    Les utilisateurs<br>
    @if(count($users)== 0)
        Aucun résultat d'utilisateur pour {{$result}}
    @else
        @foreach($users as $u)
            <a href="/user/{{ $u->id }}">{{ $u->name }}</a><br>
        @endforeach
    @endif
    <br>
    Les musiques<br>

    @if(count($chansons)== 0)
        Aucun résultat d'utilisateur pour {{$result}}
    @else
        @foreach($chansons as $c)
            <a href="/musique/{{ $c->id }}">{{ $c->nom }}</a><br>
        @endforeach
    @endif
    <br>
    Les playlists<br>
    @if(count($playlists)== 0)
        Aucun résultat d'utilisateur pour {{$result}}
    @else
        @foreach($playlists as $p)
            <a href="/playlist/{{ $p->id }}">{{ $p->nom }}</a><br>
        @endforeach
    @endif

@endsection
