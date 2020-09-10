<h1>Title: {{$album->title}}</h1>
<p>Artist: {{$album->artist}}</p>
<p>Year: {{$album->year}}</p>

<h2>Songs List:</h2>
<ul>
  @foreach ($album->songs as $song)
    <li>{{$song->title}}</li>
  @endforeach
</ul>
