@extends('layouts.app')

@section('content')

    @if( Auth::id() === $playlist->utilisateur_id)
        @if( Route::currentRouteName() == 'playlist')
            <h2 class="h2_page_index"><a href="/ajouterChansonP/{{ $playlist->id }}">Ajouter une chanson à la playlist</a></h2>
        @endif
    @endif
    <div class="wrapper2">

    @if(count($playlist->chansons )== 0)
            <span>Votre playlist est vide !</span>
    @else

            <div class="main-musiques-boite">
                @foreach($playlist->chansons as $c)
                    <div class="main-musiques-boite-boite">
                        <a class="ml5" href="/musique/{{ $c->id }}"><img class="imageMusiques"
                                                                         src="{{ $c->image }}"/></a>
                        <span><a href="/musique/{{ $c->id }}">{{ $c->nom }}</a></span><br>

                    </div>
                @endforeach
            </div>
    @endif
    </div>

@endsection
