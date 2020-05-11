@extends('layouts.app')

@section('content')
    <h2>Résultat de recherche pour "{{$result}}"</h2>

    <div class="test">
        <h3 class="ml5">Les utilisateurs</h3><br>
        @if(count($users)== 0)
            Aucun résultat d'utilisateur pour {{$result}}
        @else
            @foreach($users as $u)
                <a class="ml5" href="/user/{{ $u->id }}">{{ $u->name }} </a><br>
            @endforeach
        @endif
        <br>
        <h3 class="ml5">Les musiques</h3><br>

        @if(count($chansons)== 0)
            Aucun résultat d'utilisateur pour {{$result}}
        @else
            <div class="main-musiques-boite">
                @foreach($chansons as $c)
                    <div class="main-musiques-boite-boite">
                        <a class="ml5" href="/musique/{{ $c->id }}"><img class="imageMusiques"
                                                                         src="{{ $c->image }}"/></a>
                        <a class="ml5" href="/musique/{{ $c->id }}">{{ $c->nom }}</a>
                    </div>
                @endforeach
            </div>
        @endif
        <br>
        <h3 class="ml5">Les playlists</h3><br>
        @if(count($playlists)== 0)
            Aucun résultat d'utilisateur pour {{$result}}
        @else
            @foreach($playlists as $p)
                <a class="ml5" href="/playlist/{{ $p->id }}">{{ $p->nom }}</a><br>
            @endforeach
        @endif
    </div>
@endsection
