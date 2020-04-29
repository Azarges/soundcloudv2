@extends('layouts.app')

@section('content')

    User : {{ $user->name }}<br>
    Email : {{ $user->email }}<br>
    @foreach($user->chansons as $c)
        <a href="/musique/{{ $c->id }}">{{ $c->nom }}</a>
    @endforeach
    <?php
    $nbFollowers = count($user->ilsMeSuivent);
    $nbAbonnement = count($user->jeLesSuit);
    ?>

    @auth
        @if($user->id != \Illuminate\Support\Facades\Auth::id())
            @if(Auth::user()->jeLesSuit->contains($user->id))
                <a href="/suivi/{{ $user->id }}">Arreter de suivre</a>
            @else
                <a href="/suivi/{{ $user->id }}">Suivre</a>
            @endif
            <br>
        @endif
    @endauth
    {{ $nbFollowers }} Abonnés <br>

    @foreach($user->ilsMeSuivent as $followed)
        <div><a href="/user/{{ $followed->id }}">{{ $followed->name }}</a> vous suit</div><br>
    @endforeach

    {{ $nbAbonnement }} Abonnements<br>
    @foreach($user->jeLesSuit as $follow)
        <div>Vous êtes abonné à <a href="/user/{{ $follow->id }}">{{ $follow->name }}</a></div><br>
    @endforeach

    @foreach($user->playlists as $p)
        <div><a href="/playlist/{{ $p->id }}">{{ $p->nom }}</a> </div><br>
        @foreach($p->chansons as $c)
            {{ $c->nom }}<br>
        @endforeach

    @endforeach<br>
    @if( Auth::id() === $user->id)
    <a href="/nouvellePlaylist" >Ajouter une playlist</a>
    @endif

@endsection
