@extends('welcome')

@section('content_area')
    <h1>{{ $country->getAttribute('name') }}</h1>
    <h3>{{ trans('countries.show.city_header') }}</h3>
    <ul>
        @if (count($cities))
            @foreach($cities as $city)
                <li>{{ $city->getAttribute('name') }}</li>
            @endforeach
        @else
            <h3>{{  trans('countries.show.empty') }}</h3>
        @endif
    </ul>
    <h3>{{ trans('countries.show.languages_header') }}</h3>
    <ul>
        @if (count($languages))
            @foreach($languages as $language)
                <li>{{ $language->getAttribute('name') }}</li>
            @endforeach
        @else
            <h3>{{  trans('countries.show.empty') }}</h3>
        @endif
    </ul>
    <div class="pull-right">
        <a href="{{ route('cities.create', ['country' => $country]) }}"
           class="btn btn-primary btn-success">{{  trans('countries.show.buttons.add') }}</a>
    </div>
    <a href="{{ url()->previous() }}" class="btn btn-default">{{  trans('countries.show.buttons.back') }}</a>
@endsection
