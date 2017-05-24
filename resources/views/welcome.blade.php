@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-info">
                    <div class="panel-heading">Menu</div>
                    <div class="panel-body">
                        @include("layouts.partials._nav")
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="panel panel-info">
                    <div class="panel-heading">Title</div>
                    <div class="panel-body">
                        @yield('content_area')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
