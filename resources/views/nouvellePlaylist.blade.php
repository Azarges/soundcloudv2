@extends('layouts.app')

@section('content')

    <form action="/creerPlaylist" method="post" enctype="multipart/form-data">
        Nom playlist <input type="text" name="nomPlaylist" required placeholder="Nom de la playlist">
        <br>
        {{ csrf_field() }}
        <input type="submit" />
    </form>

@endsection
