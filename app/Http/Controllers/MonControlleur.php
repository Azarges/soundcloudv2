<?php

namespace App\Http\Controllers;

use App\Chanson;
use App\User;

class MonControlleur extends Controller
{
    public function index() {
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
        return view("user", ["user" => $user]);
    }
}
