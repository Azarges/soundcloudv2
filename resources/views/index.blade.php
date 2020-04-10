@extends('layouts.app')

@section('content')
    A vous de travailler maintenant :)
    tests d'affichage des musiques
    @foreach($musiques as $m)
        <li><a href="/musique/{{ $m->id }}">{{ $m->nom }}</a> </li>
    @endforeach
@endsection
