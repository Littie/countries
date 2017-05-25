@extends('welcome')

@section('content_area')
    <h1>{{ trans('languages.check.index.header') }}</h1>
    <form id="check_cities">
        <div class="form-group">
            <label for="countries" class="control-label">{{ trans('languages.check.index.form.country') }}:</label>
            <select class="form-control" name="country" id="countries">
                @foreach($countries as $country)
                    <option value="{{ $country->getKey() }}">{{ $country->getAttribute('name') }}</option>
                @endforeach
            </select>
        </div>
    </form>
@endsection
