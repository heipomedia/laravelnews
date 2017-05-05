@foreach($news as $n)
<h1><a href="{{ route('news', $n->id) }}">{{ $n->titel }}</a></h1>
<p>
    <em>{{ $n->created_at->diffForHumans() }}</em>
</p>
<p>
    {{ $n->text }}
</p>
@endforeach