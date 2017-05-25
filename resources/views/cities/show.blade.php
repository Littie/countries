@extends('welcome')

@section('content_area')
    <h1>{{ $city->getAttribute('name') }}</h1>
    <h3>{{ trans('cities.show.country_header') }} {{ $city->country->getAttribute('name') }}</h3>
    <h3>{{ trans('cities.show.languages_header') }}</h3>
    <ul>
        @foreach($languages as $language)
            <li>{{ $language->getAttribute('name') }}</li>
        @endforeach
    </ul>
    <a href="{{ url()->previous() }}" class="btn btn-default">{{ trans('cities.show.buttons.back') }}</a>
@endsection
