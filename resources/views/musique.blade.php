@extends('layouts.app')

@section('content')
    Musique numéro : {{ $musiques->id }}<br>
    Titre {{ $musiques->nom }}

@endsection
