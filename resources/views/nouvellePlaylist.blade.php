@extends('layouts.app')

@section('content')
    <div class="main-box">
        <div class="box">
            <h2>Créer une playlist</h2>
            <form action="/creerPlaylist" method="post" enctype="multipart/form-data">
                @csrf
                <div class="inputBox">
                    <input id="nomPlaylist" type="text" class="form-control{{ $errors->has('nomPlaylist') ? ' is-invalid' : '' }}" name="nomPlaylist" value="{{ old('nomPlaylist') }}" required autofocus>
                    <label for="nomPlaylist">{{ __('Nom de la chanson') }}</label>
                </div>



                <input type="submit" name="" value="Créer la playlist">
            </form>
        </div>
    </div>
@endsection
