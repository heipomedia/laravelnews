<form action="/category/new" method="post">
    {{ csrf_field() }}

    <h1>Neue Kategorie erstellen</h1>

    Name: <input type="text" name="name">
    <input type="submit" value="Speichern">

</form>