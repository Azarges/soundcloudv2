<?php

namespace App\Http\Controllers;

use App\Chanson;
use App\Contient;
use App\Playlist;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MonControlleur extends Controller
{
    public function index() {
        //phpinfo();
        $musiques = (Chanson::all());
        return view("index", ["musiques" => $musiques]);
    }

    public function musiques(){
        $musiques = (Chanson::all());
        return view("musiques", ["musiques" => $musiques]);
    }

    public function musique($id){
        $musique = (Chanson::find($id));
        return view("musique", ["musique" => $musique]);
    }
    public function user($id){
        $user = (User::find($id));
        if($user==false){
            abort("404");
        }
        return view("user", ["user" => $user]);
    }

    public function nouvelle() {
        return view("nouvelle");
    }


    public function creer(Request $request) {
        //print_r($_FILES);
        print_r("oui");
        //if($request->HasFile("chanson") && $request->file("chanson")->isValid()){
            print_r("non");
            $c = new Chanson();
            $c->nom = $request->input("nom");
            $c->style = $request->input("style");
            $c->utilisateur_id = Auth::id();
            $c->fichier = $request->input("chanson");
            //$c->fichier = $request->file("chanson")->store("public/chansons".Auth::id());
            //$c->fichier = str_replace("public/", "/storage/", $c->fichier);

            $c->save();
        //}

        return redirect("/");
    }

    public function playlist($id){
        $playlist = (Playlist::find($id));
        return view("playlist", ["playlist" => $playlist]);
    }

    public function nouvellePlaylist() {
        return view("nouvellePlaylist");
    }



    public function creerPlaylist(Request $request) {
        $p = new Playlist();
        $p->nom = $request->input("nomPlaylist");
        $p->utilisateur_id = Auth::id();
        $p->save();
        return redirect("/user/".Auth::id());
    }

    public function suivi($id){
        $user = User::find($id);

        if($user==false)
            abort("403");
        Auth::user()->jeLesSuit()->toggle($id);
        return back();
    }

    public function ajouterChansonP($id) {
        return view("ajouterChansonP", ['id' => $id]);
    }


    public function ajouterChanson(Request $request) {
        $c = new Contient();
        $c->chanson_id = $request->input("id_chanson");
        $c->playlist_id = $request->input("id_playlist");
        $c->save();
        return redirect("/user/".Auth::id());
    }

    public function recherche($s){
        $users=User::whereRaw("name LIKE CONCAT('%',?,'%')",[$s])->get();
        $chansons=Chanson::whereRaw("nom LIKE CONCAT('%',?,'%')",[$s])->get();
        $playlists=Playlist::whereRaw("nom LIKE CONCAT('%',?,'%')",[$s])->get();
        return view("recherche",['users' => $users, 'chansons' => $chansons, 'playlists' => $playlists]);
    }
}
