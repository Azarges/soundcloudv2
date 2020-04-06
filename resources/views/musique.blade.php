@extends('layouts.app')

@section('content')
    Musique numéro : {{ $musique->id }}<br>
    Titre {{ $musique->nom }}<br>
    Ecouter : <audio controls src="{{ $musique->fichier }}">Your browser does not support the <code>audio</code> element</audio><br>
    Style :  {{ $musique->style }}

@endsection
