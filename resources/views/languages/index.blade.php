@extends('welcome')

@section('content_area')
    <div>
        <a href="{{ route('languages.create') }}" class="btn btn-primary btn-success">Create language</a>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Code</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($languages as $language)
            <tr>
                <td>
                    <a href="{{ url()->current() }}">{{ $language->getAttribute('name') }}</a>
                </td>
                <td>
                    {{ $language->getAttribute('code') }}
                </td>
                <td>
                    <div class="action-block">
                        <a class="btn btn-primary language_edit" href="{{ route('languages.edit', ['language' => $language]) }}">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                        </a>
                        <form method="POST" action="{{ route('languages.destroy', ['language' => $language]) }}">
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
        {{ $languages->links() }}
    </div>
@endsection
