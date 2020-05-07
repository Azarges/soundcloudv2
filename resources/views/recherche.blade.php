@extends('layouts.app')

@section('content')

    Les utilisateurs<br>
    @foreach($users as $u)
        <a href="/user/{{ $u->id }}">{{ $u->name }}</a><br>
    @endforeach
    <br>
    Les musiques
    <br>
    @foreach($chansons as $c)
        <a href="/musique/{{ $c->id }}">{{ $c->nom }}</a><br>
    @endforeach
    Les playlists
    <br>
    @foreach($playlists as $p)
        <a href="/playlist/{{ $p->id }}">{{ $p->nom }}</a><br>
    @endforeach
@endsection
