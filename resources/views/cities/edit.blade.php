@extends('welcome')

@section('content_area')
    <h1>Edit city</h1>

    <form method="POST" action="{{ route('cities.update', ['country' => $city->country, 'city' => $city]) }}">
        {{ method_field('PUT') }}
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">City name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $city->getAttribute('name') }}" placeholder="City name" required>
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
            <button type="submit" class="btn btn-primary">Update</button>
        </div>

        @include('layouts.errors')
    </form>
@endsection
