@extends('layouts.app')

@section('content')

    <h4>Dashboard</h4>

    <hr>

    <p>Du hast dich erfolgreich eingeloggt. Was willst du tun?</p>

    <div class="button-group">
        <a href="/news/new" class="button">News schreiben</a>
        <a href="/category/new" class="button">Kategorie erstellen</a>
    </div>

    <a href="/" class="button secondary">Newsliste</a>

@endsection
