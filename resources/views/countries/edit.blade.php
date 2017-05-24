@extends('welcome')

@section('content_area')
    <h1>{{ trans('countries.edit.header') }}</h1>

    <form method="POST" action="{{ route('countries.update', ['id' => $country]) }}">
        {{ method_field('PUT') }}
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">{{ trans('countries.edit.form.name') }}:</label>
            <input type="text" class="form-control" id="name" name="name"
                   value="{{ old('name', $country->getAttribute('name')) }}"
                   placeholder="{{ trans('countries.edit.form.name') }}" required>
        </div>

        <div class="form-group">
            <label for="Code">{{ trans('countries.edit.form.code') }}:</label>
            <input type="text" class="form-control" id="code" name="code"
                   value="{{ old('code', $country->getAttribute('code')) }}"
                   placeholder="{{ trans('countries.edit.form.code') }}" required>
        </div>

        <div class="form-group">
            <label for="cities">{{ trans('countries.edit.form.languages') }}:</label>
            <select class="form-control" id="languages" name="languages[]" size="10" multiple>
                @foreach($languages as $language)
                    <option value="{{ $language->getAttribute('id') }}">{{ $language->getAttribute('name') }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">{{ trans('countries.edit.form.buttons.update') }}</button>
        </div>

        @include('layouts.errors')
    </form>
@endsection
