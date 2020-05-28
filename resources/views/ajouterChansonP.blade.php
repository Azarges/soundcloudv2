@extends('layouts.app')

@section('content')

 

    <div class="main-box">
        <div class="box">
            <h2>Ajouter une musique à la playlist</h2>
            <form action="/ajouterChanson" method="post" enctype="multipart/form-data">
                @csrf
                <div class="inputBox">
                    <input id="id_chanson" type="int" class="form-control{{ $errors->has('id_chanson') ? ' is-invalid' : '' }}" name="id_chanson" value="{{ old('id_chanson') }}" required autofocus>
                    <label for="id_chanson">{{ __('Id de la chanson') }}</label>
                </div>
                <input hidden name="id_playlist" value="{{ $id }}"/>
                <input type="submit" name="" value="Ajouter la musique">
            </form>
        </div>
    </div>
@endsection
