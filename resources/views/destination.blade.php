@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                <h1>D {{ $destination->id }} {{ $destination->name }}</h1>
                <p>Description: {{ $destination->description }}</p>
                <h2>Categories & Records</h2>
                @foreach($destination->categories as $category)
                    C {{ $category->id }} {{ $category->name }}
                    <ul>
                    @foreach($category->records as $record)
                        <li>R {{ $record->id }} {{ $record->name }}</li>
                    @endforeach
                    </ul>
                @endforeach
                
                <h2>GMap</h2>
                <p>Lat: {{ $destination->latitude }} / Long:{{ $destination->longitude }}</p>
                <p></p>
                <div id="map"></div>
                <script>

function initMap() {
  var myLatLng = {lat: {{ $destination->latitude }}, lng: {{ $destination->longitude }}};

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 10,
    center: myLatLng
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Hello World!'
  });
}

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNfiwo-BudtuWhZbw3ApIXMLRbY8v28xI&callback=initMap" async defer></script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
