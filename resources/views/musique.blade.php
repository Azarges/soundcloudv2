@extends('layouts.app')

@section('content')
    Musique numéro : {{ $musique->id }}<br>
    Titre {{ $musique->nom }}<br>
    Ecouter : <audio id="musique" controls src="{{ $musique->fichier }}">Your browser does not support the <code>audio</code> element</audio><br>
    <img class="imageMusique" src="{{ $musique->image }}"/>
    Style :  {{ $musique->style }}<br>
    Appartient à : <a href="/user/{{ $musique->utilisateur->id }}">{{ $musique->utilisateur->name }}</a>

    <button ></button>

    <script type="text/javascript">
        var monElementAudio = document.getElementById('musique');
        monElementAudio.volume = 0.02;
    </script>
@endsection
