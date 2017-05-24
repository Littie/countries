@extends('welcome')

@section('content_area')
    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cities as $city)
            <tr>
                <td>
                    <a href="{{ route('cities.show', ['country' => $city->country, 'city' => $city]) }}">{{ $city->getAttribute('name') }}</a>
                </td>
                <td>
                    <div class="action-block">
                        <a class="btn btn-primary city_edit" href="{{ route('cities.edit', ['country' => $city->country, 'city' => $city]) }}">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </a>
                        <form method="POST" action="{{ route('cities.destroy', ['countries' => $city->country, 'city' => $city]) }}">
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
        {{ $cities->links() }}
    </div>
@endsection
