<h1>{{$heading}}</h1>

@foreach($listings as $listing)
    <h2>
        <a href="/listings/{{$listing['id']}}">
            {{$listing['title']}}
        </a>
    </h2>
    <h2>
        {{$listing['description']}}
    </h2>
@endforeach
