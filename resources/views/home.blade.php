@extends('layouts.app')

@section('content')

<div class="container py-3">
    <div class="row row-cols-1 row-cols-md-2 g-4">
        @foreach ($trains as $train)
        <div class="col">
            <div class="card h-100 text-uppercase shadow">
                <div class="card-header text-center">
                    <p><strong>Train Number: <span>{{$train -> train_code}}</span></strong></p>
                </div>
                <div class="card-body position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p>Departure Station:</p>
                            <p>Time:</p><br>
                            <p>Arrival Station:</p>
                            <p>Time:</p><br>
                            <p>Carriages Number</p>
                            @if($train -> deleted === 0)
                            <p>On Time:</p>
                            @endif
                        </div>
                        <div class="text-end fw-bold">
                            <p>{{$train -> departure_station}}</p>
                            <p>{{$train -> departure_time}}</p><br>
                            <p>{{$train -> arrival_station}}</p>
                            <p>{{$train -> arrival_time}}</p><br>
                            <p>{{$train -> carriages_number}}</p>
                            @if($train -> deleted === 0)
                            <p>{{$train -> on_time === 1 ? "Yes" : "No"}}</p>
                            @endif
                        </div>
                    </div>
                    @if($train -> deleted === 1)
                    <div class="text-center position-absolute deleted">
                    <h2 class="fw-bold">{{$train -> deleted === 1 ? "Deleted" : ""}}</h2>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection