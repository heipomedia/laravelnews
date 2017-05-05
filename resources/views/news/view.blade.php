<h1>{{ $news->titel }}</h1>
<p>
    <em>{{ $news->created_at->diffForHumans() }}</em>
</p>
<p>
    {{ $news->text }}
</p>
<p>
    <strong>Kategorien:</strong>
    <ul>
        @foreach($news->categories as $c)
            <li>{{ $c->name }}</li>
        @endforeach
    </ul>
</p>
<p>
    <i>Geschrieben von {{ $user->name }}</i>
</p>
<a href="/">Zurück</a>