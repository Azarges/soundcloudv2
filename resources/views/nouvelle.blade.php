@extends('layouts.app')

@section('content')
    <div class="main-box">
        <div class="box">
            <h2>Ajouter une musique</h2>
            <form action="/creer" method="post" enctype="multipart/form-data">
                @csrf
                <div class="inputBox">
                    <input id="nom" type="text" class="form-control{{ $errors->has('nom') ? ' is-invalid' : '' }}" name="nom" value="{{ old('nom') }}" required autofocus>
                    <label for="nom">{{ __('Nom de la chanson') }}</label>
                </div>
                <div class="inputBox">
                    <input id="style" type="text" class="form-control{{ $errors->has('style') ? ' is-invalid' : '' }}" name="style" value="{{ old('style') }}" required autofocus>
                    <label for="style">{{ __('Style de la chanson') }}</label>
                </div>
                <div class="inputBox">
                    <input id="chanson" type="text" class="form-control{{ $errors->has('chanson') ? ' is-invalid' : '' }}" name="chanson" value="{{ old('chanson') }}" required autofocus>
                    <label for="chanson">{{ __('Url de la chanson') }}</label>
                </div>
                <div class="inputBox">
                    <input id="image" type="text" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" value="{{ old('image') }}" required autofocus>
                    <label for="image">{{ __('Url de l\'image') }}</label>
                </div>
                <input type="submit" name="" value="Créer la playlist">
            </form>
        </div>
    </div>
@endsection
