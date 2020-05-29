@extends('layouts.app')

@section('content')
    <div class="profil_setting_content">
        <div class="profil_part">
            <h2>Profile Information</h2><br>
            <div><img src="{{ $user->image }}" style="width: 350px;height: 350px;" alt="Image du profil"></div><br>
            <h3>Nom d'utilisateur :</h3>
            <p>{{ $user->name }}</p><br>
            <h3>Adresse-mail :</h3>
            <p>{{ $user->email }}</p><br>
            <h3>Mes musiques :</h3>
            @foreach($user->chansons as $c)
                <a href="/musique/{{ $c->id }}">{{ $c->nom }}</a><br>
            @endforeach<br>
            <h3>Mes playlists :</h3>
            @foreach($user->playlists as $p)
                <a href="/playlist/{{ $p->id }}">{{ $p->nom }}</a><br>
            @endforeach<br>
            <h3>Ajouter une playlist :</h3>
            @if( Auth::id() === $user->id)
                <a href="/nouvellePlaylist" >Ajouter une playlist</a>
            @endif
        </div>
        <div class="follow_part">
            <h2>Follow</h2><br>
            <?php
            $nbFollowers = count($user->ilsMeSuivent);
            $nbAbonnement = count($user->jeLesSuit);
            ?>
            @auth
                @if($user->id != \Illuminate\Support\Facades\Auth::id())
                    @if(Auth::user()->jeLesSuit->contains($user->id))
                        <a href="/suivi/{{ $user->id }}">Arreter de suivre</a><br>
                    @else
                        <a href="/suivi/{{ $user->id }}">Suivre</a><br>
                    @endif
                    <br>
                @endif
            @endauth
            {{ $nbFollowers }} Abonnés <br><br>

            @foreach($user->ilsMeSuivent as $followed)
                <div><a href="/user/{{ $followed->id }}">{{ $followed->name }}</a></div><br>
            @endforeach

            {{ $nbAbonnement }} Abonnements<br>
            @foreach($user->jeLesSuit as $follow)
                <div><a href="/user/{{ $follow->id }}">{{ $follow->name }}</a></div><br>
            @endforeach
        </div>
    </div>
@endsection
