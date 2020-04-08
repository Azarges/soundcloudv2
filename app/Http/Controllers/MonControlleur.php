<?php

namespace App\Http\Controllers;

use App\Chanson;
use App\Playlist;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MonControlleur extends Controller
{
    public function index() {
        //phpinfo();
        return view("index");
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

    public function playlist(){
        return view("playlist");
    }

}
