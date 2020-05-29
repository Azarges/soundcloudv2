@extends('layouts.app')

@section('content')
    <div class="musique_page">
        <div style="display: flex;flex-direction: row;align-items: center;margin-bottom: 1vh;">
            <h1 style="margin-right: 1vw;">{{ $musique->nom }}</h1>
            <a href="/deleteMusique/{{ $musique->id }}" style="padding-top: 5px;"><i class="fas fa-trash"></i></a>
        </div>
        <img class="imageMusique" src="{{ $musique->image }}"/>
        <audio id="musique" controls src="{{ $musique->fichier }}">Your browser does not support the <code>audio</code> element</audio><br>
        Style : {{ $musique->style }}<br>
        <span>Appartient à : <a href="/user/{{ $musique->utilisateur->id }}">{{ $musique->utilisateur->name }}</a></span>
    </div>

    <script type="text/javascript">
        var monElementAudio = document.getElementById('musique');
        monElementAudio.volume = 0.02;
    </script>
@endsection
