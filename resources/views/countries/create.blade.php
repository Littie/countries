@extends('welcome')

@section('content_area')
    <h1>{{ trans('countries.create.header') }}</h1>

    <form method="POST" action="{{ route('countries.store') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">{{ trans('countries.create.form.name') }}:</label>
            <input type="text" class="form-control" id="name" name="name"
                   placeholder="{{ trans('countries.create.form.name') }}" required>
        </div>

        <div class="form-group">
            <label for="Code">{{ trans('countries.create.form.code') }}:</label>
            <input type="text" class="form-control" id="code" name="code"
                   placeholder="{{ trans('countries.create.form.code') }}" required>
        </div>

        <div class="form-group">
            <label for="cities">{{ trans('countries.create.form.languages') }}:</label>
            <select class="form-control" id="languages" name="languages[]" size="10" multiple>
                @foreach($languages as $language)
                    <option value="{{ $language->getAttribute('id') }}">{{ $language->getAttribute('name') }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">{{ trans('countries.create.form.buttons.create') }}</button>
        </div>

        @include('layouts.errors')
    </form>
@endsection
