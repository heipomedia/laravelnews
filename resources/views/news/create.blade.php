<form method="post" action="/news/new">

    <h1>Neue News schreiben</h1>

    @if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

    {{ csrf_field() }}

    Titel: <input type="text" name="titel" />

    <select name="category[]" multiple>
            @foreach($categories as $c)
                <option value="{{ $c->id }}">{{ $c->name }}</option>
            @endforeach
    </select>

    Text:
    <textarea name="text"></textarea>

    <input type="submit" value="Speichern" />

</form>