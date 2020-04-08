@extends('layouts.app')

@section('content')
    @foreach($user->playlists as $p)
        <div><a href="/playlist/{{ $p->id }}">{{ $p->nom }}</a> </div><br>
        @foreach($p->chansons as $c)
            {{ $c->nom }}<br>
        @endforeach

    @endforeach<br>
    User n°{{ $user->id }}<br>
    User n°{{ $user->name }}<br>
    User n°{{ $user->email }}<br>
    @foreach($user->chansons as $c)
        {{ $c->nom }}<br>
    @endforeach
    <?php
    $nbFollowers = count($user->ilsMeSuivent);
    $nbAbonnement = count($user->jeLesSuit);
    ?>
    {{ $nbFollowers }} Abonnés <br>

    @foreach($user->ilsMeSuivent as $followed)
        Followers : {{ $followed->name }}<br>
    @endforeach

    {{ $nbAbonnement }} Abonnements<br>
    @foreach($user->jeLesSuit as $follow)
        Following : {{ $follow->name }}<br>
    @endforeach
    <div id="menu">
        <div class="menu" id="menu1" onclick="afficheMenu(this)">
            <a href="#">Menu 1</a>
        </div>
        <div id="sousmenu1" style="display:none">
            <div class="sousmenu">
                <a href="#">Sous-Menu 1.1</a>
            </div>
            <div class="sousmenu">
                <a href="#">Sous-Menu 1.2</a>
            </div>
            <div class="sousmenu">
                <a href="#">Sous-Menu 1.3</a>
            </div>
            <div class="sousmenu">
                <a href="#">Sous-Menu 1.4</a>
            </div>
        </div>
    </div>
    <script>function afficheMenu(obj){

            var idMenu     = obj.id;
            var idSousMenu = 'sous' + idMenu;
            var sousMenu   = document.getElementById(idSousMenu);

            for(var i = 1; i <= 4; i++){
                if(document.getElementById('sousmenu' + i) && document.getElementById('sousmenu' + i) != sousMenu){
                    document.getElementById('sousmenu' + i).style.display = "none";
                }
            }

            if(sousMenu){

                if(sousMenu.style.display == "block"){
                    sousMenu.style.display = "none";
                }
                else{
                    sousMenu.style.display = "block";
                }
            }

        }</script>
@endsection
