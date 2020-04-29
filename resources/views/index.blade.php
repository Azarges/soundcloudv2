@extends('layouts.app')

@section('content')
    <div>
        <form id="search" class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2 btn-sm" type="search" name="search" required placeholder="Recherche" aria-label="Search">
            <button class="btn my-2 my-sm-0 btn-sm" style="color: white; background-color: #018d8a" type="submit">Valider</button>
        </form>
    </div>
    <h2>Écoutez gratuitement les dernières tendances de la communauté SoundCloud</h2>
    <div class="main-musiques-box">
    @foreach($musiques as $m)
        <div class="main-musiques-box-box">
            <a href="/musique/{{ $m->id }}"><img class="imageMusiques" src="{{ $m->image }}"/></a>
            <a href="/musique/{{ $m->id }}">{{ $m->nom }}</a>
        </div>
    @endforeach
    </div>
    <h2>Merci de nous avoir écouté ! Inscrivez-vous dès maintenant.<br>
        Sauvegardez des titres, suivez des artistes et créez des playlists, tout cela gratuitement.</h2>
    <div class="content-input-button"><a class="input-button" href="{{ route('register') }}">Créer votre compte</a></div>
    <div class="content-input-button">Vous avez déjà un compte ?   <a href="{{ route('login') }}">Se connecter</a></div>
@endsection
