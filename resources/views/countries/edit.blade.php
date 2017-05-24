@extends('welcome')

@section('content_area')
    <h1>Edit</h1>

    <form method="POST" action="{{ route('countries.update', ['id' => $country]) }}">
        {{ method_field('PUT') }}
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Country name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $country->getAttribute('name')) }}" placeholder="Country name" required>
        </div>

        <div class="form-group">
            <label for="Code">Country code:</label>
            <input type="text" class="form-control" id="code" name="code" value="{{ old('code', $country->getAttribute('code')) }}" placeholder="Country code" required>
        </div>

        <div class="form-group">
            <label for="cities">Change languages:</label>
            <select class="form-control" id="languages" name="languages[]" size="10" multiple>
                @foreach($languages as $language)
                    <option value="{{ $language->getAttribute('id') }}">{{ $language->getAttribute('name') }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>

        @include('layouts.errors')
    </form>
@endsection
