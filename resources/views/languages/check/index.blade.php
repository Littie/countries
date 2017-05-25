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

    <h2>{{ trans('languages.check.index.table.head') }}</h2>
    <table id="check_tables" class="table">
        <thead>
        <tr>
            {{--<td>{{ trans('languages.check.index.table.headers.place') }}</td>--}}
            <td>{{ trans('languages.check.index.table.headers.name') }}</td>
            <td>{{ trans('languages.check.index.table.headers.code') }}</td>
        </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
@endsection
