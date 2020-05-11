@extends('layouts.app')

@section('content')
    <h2>Écoutez gratuitement les dernières tendances de la communauté SoundCloud</h2>
    <div class="main-musiques-box">
    @foreach($musiques as $m)
        <div class="main-musiques-box-box">
            <a href="/musique/{{ $m->id }}"><img class="imageMusiques" src="{{ $m->image }}"/></a>
            <a href="/musique/{{ $m->id }}">{{ $m->nom }}</a>
        </div>
    @endforeach
    </div>
    @auth()
        <h2>Merci de nous avoir écouté !<br>Sauvegardez des titres, suivez des artistes et créez des playlists, tout cela gratuitement.</h2>
    @endauth

    @guest()
    <h2>Merci de nous avoir écouté ! Inscrivez-vous dès maintenant.<br>
        Sauvegardez des titres, suivez des artistes et créez des playlists, tout cela gratuitement.</h2>
    <div class="content-input-button"><a class="input-button" href="{{ route('register') }}">Créer votre compte</a></div>
    <div class="content-input-button">Vous avez déjà un compte ? <a href="{{ route('login') }}">Se connecter</a></div>
    @endguest()
@endsection
