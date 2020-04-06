<?php

namespace App\Http\Controllers;

use App\Musiques;
use Illuminate\Http\Request;

class MonControlleur extends Controller
{
    public function index() {
        return view("index");
    }

    public function musiques(){
        $musiques = (Musiques::all());
        return view("musiques", ["musiques" => $musiques]);
    }

    public function musique($id){
        $musiques = (Musiques::find($id));
        return view("musique", ["musiques" => $musiques]);
    }
}
