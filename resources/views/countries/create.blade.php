@extends('welcome')

@section('content_area')
    <h1>Create country</h1>

    <form method="POST" action="{{ route('countries.store') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Country name:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Country name" required>
        </div>

        <div class="form-group">
            <label for="Code">Country code:</label>
            <input type="text" class="form-control" id="code" name="code" placeholder="Country code" required>
        </div>

        <div class="form-group">
            <label for="cities">Add languages:</label>
            <select class="form-control" id="languages" name="languages[]" size="10" multiple>
                @foreach($languages as $language)
                    <option value="{{ $language->getAttribute('id') }}">{{ $language->getAttribute('name') }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>

        @include('layouts.errors')
    </form>
@endsection
