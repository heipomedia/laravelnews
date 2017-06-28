@extends('layouts.app')

@section('content')

    <h4>Neue Kategorie erstellen</h4>

    <hr>

    <form action="/category/new" method="post">

        {{ csrf_field() }}

        <label>Name
            <input type="text" name="name">
        </label>

        <input type="submit" value="Speichern" class="button">

    </form>

@endsection
