<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    protected $table = 'playlist';

    public function user() {
        return $this->belongsTo('App\Playlist', 'utilisateur_id');
        // SELECT * from playlist where utilisateur_id = $this->id

    }
    public function chansons(){
        return $this->belongsToMany('App\Chanson', 'contient','playlist_id', 'chanson_id');
    }
}

