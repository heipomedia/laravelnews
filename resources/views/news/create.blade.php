@extends('layouts.app')

@section('content')

    <h4>Neue News schreiben</h4>

    <hr>

    @if (count($errors) > 0)
        <div class="callout alert">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="/news/new">

        {{ csrf_field() }}

        <label>Titel
            <input type="text" name="titel">
        </label>

        <label>Wähle eine Kategorie
            <select name="category[]" multiple>
                @foreach($categories as $c)
                    <option value="{{ $c->id }}">{{ $c->name }}</option>
                @endforeach
            </select>
        </label>

        <label>Text
            <textarea name="text" rows="8"></textarea>
        </label>

        <input type="submit" value="Speichern" class="button">

    </form>

@endsection
