@extends('welcome')

@section('content_area')
    <h1>Create language</h1>

    <form method="POST" action="{{ route('languages.update', ['language' => $language]) }}">
        {{ method_field('PUT') }}
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Language name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $language->getAttribute('name')) }}" placeholder="Language name" required>
        </div>

        <div class="form-group">
            <label for="Code">Language code:</label>
            <input type="text" class="form-control" id="code" name="code" value="{{ old('code', $language->getAttribute('code')) }}" placeholder="Language code" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>

        @include('layouts.errors')
    </form>
@endsection
