@extends('welcome')

@section('content_area')
    <div>
        <a href="{{ route('countries.create') }}"
           class="btn btn-primary btn-success">{{ trans('countries.index.buttons.create') }}</a>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th>{{ trans('countries.index.table.headers.name') }}</th>
            <th>{{ trans('countries.index.table.headers.code') }}</th>
            <th>{{ trans('countries.index.table.headers.action') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($countries as $country)
            <tr>
                <td>
                    <a href="{{ route('countries.show', ['id' => $country]) }}">{{ $country->getAttribute('name') }}</a>
                </td>
                <td>{{ $country->getAttribute('code')}}</td>
                <td>
                    <div class="action-block">
                        <a class="btn btn-primary country_edit"
                           href="{{ route('countries.edit', ['id' => $country]) }}">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </a>
                        <form method="POST" action="{{ route('countries.destroy', ['id' => $country]) }}">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button class="btn btn-danger" type="submit">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div>
        {{ $countries->links() }}
    </div>
@endsection
