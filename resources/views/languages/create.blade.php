@extends('welcome')

@section('content_area')
    <h1>{{ trans('languages.create.header') }}</h1>

    <form method="POST" action="{{ route('languages.store') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">{{ trans('languages.create.form.name') }}:</label>
            <input type="text" class="form-control" id="name" name="name"
                   placeholder="{{ trans('languages.create.form.name') }}" required>
        </div>

        <div class="form-group">
            <label for="Code">{{ trans('languages.create.form.code') }}:</label>
            <input type="text" class="form-control" id="code" name="code"
                   placeholder="{{ trans('languages.create.form.code') }}" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">{{ trans('languages.create.form.buttons.create') }}</button>
        </div>

        @include('layouts.errors')
    </form>
@endsection
