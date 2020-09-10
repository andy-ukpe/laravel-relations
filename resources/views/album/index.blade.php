<h1>Albums List</h1>

@foreach ($albums as $album)
  <li>Title: {{$album->title}}
    <a href="{{route('album.show', $album->id)}}">Details</a>  </li>
@endforeach
