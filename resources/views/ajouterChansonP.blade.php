@extends('layouts.app')

@section('content')

    <form action="/ajouterChanson" method="post" enctype="multipart/form-data">
        Id chanson <input type="int" name="id_chanson" required placeholder="id de la chanson">
        <br>
        {{ csrf_field() }}
        <input type="submit" />
    </form>

@endsection
