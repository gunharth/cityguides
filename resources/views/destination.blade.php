@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                <h1>{{ $destination->name }}</h1>
                <p>{{ $destination->description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
