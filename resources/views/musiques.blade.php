@extends('layouts.app')

@section('content')
    tests d'affichage des musique
    @foreach($musiques as $m)
        <li><a href="/musique/{{ $m->id }}">{{ $m->nom }}</a> </li>
    @endforeach
@endsection
