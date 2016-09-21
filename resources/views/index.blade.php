@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Destinations</div>

                <div class="panel-body">
                <ul>
                    @foreach($destinations as $destination)
                        <li> <a href="/destination/{{ $destination->id }}">{{ $destination->name }}</a></li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
