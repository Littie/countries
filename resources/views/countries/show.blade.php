@extends('welcome')

@section('content_area')
    <h1>{{ $country->getAttribute('name') }}</h1>
    <h3>Cities</h3>
    <ul>
        @if (count($cities))
            @foreach($cities as $city)
                <li>{{ $city->getAttribute('name') }}</li>
            @endforeach
        @else
            <h3>Empty cities</h3>
        @endif
    </ul>
    <h3>Languages</h3>
    <ul>
        @if (count($languages))
            @foreach($languages as $language)
                <li>{{ $language->getAttribute('name') }}</li>
            @endforeach
        @else
            <h3>Empty languages</h3>
        @endif
    </ul>
    <a href="{{ url()->previous() }}" class="btn btn-default">Back</a>
@endsection
