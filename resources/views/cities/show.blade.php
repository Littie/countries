@extends('welcome')

@section('content_area')
    <h1>{{ $city->getAttribute('name') }}</h1>
    <h3>City is {{ $city->getAttribute('name') }}</h3>
    <h3>Languages</h3>
    <ul>
        @foreach($languages as $language)
            <li>{{ $language->getAttribute('name') }}</li>
        @endforeach
    </ul>
    <a href="{{ url()->previous() }}" class="btn btn-default">Back</a>
@endsection
