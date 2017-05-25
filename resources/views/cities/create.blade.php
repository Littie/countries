@extends('welcome')

@section('content_area')
    <h1>{{ trans('cities.create.header') }}</h1>

    <form method="POST" action="{{ route('cities.store', ['country' => $country]) }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">{{ trans('cities.create.form.name') }}:</label>
            <input type="text" class="form-control" id="name" name="name"
                   placeholder="{{ trans('cities.create.form.name') }}" required>
        </div>

        <div class="form-group">
            <label for="cities">{{ trans('cities.create.form.languages') }}:</label>
            <select class="form-control" id="languages" name="languages[]" size="10" multiple>
                @foreach($languages as $language)
                    <option value="{{ $language->getAttribute('id') }}">{{ $language->getAttribute('name') }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">{{ trans('cities.create.form.buttons.create') }}</button>
        </div>

        @include('layouts.errors')
    </form>
@endsection
