@extends('layouts.app')

@section('content')

    <form action="/creer" method="post" enctype="multipart/form-data">
        Nom <input type="text" name="nom" required placeholder="Nom de la chanson">
        <br>
        Style <input type="text" name="style" required placeholder="Style de la chanson">
        <br>
        <input type="text" name="chanson"  >

        <br>
        {{ csrf_field() }}
        <input type="submit" />
    </form>

@endsection