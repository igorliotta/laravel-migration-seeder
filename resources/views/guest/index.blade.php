@extends('layouts.app')

@section('content')

<section>
    <div class="container px-4 mx-auto">
        <h1 class="text-center">Trains</h1>
        <div class="row gap-2 justify-content-around">
            @foreach ($trains as $train)
                {{-- @dump($movie) --}}
                <div class="col-3 card text-white bg-primary mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Nome Agenzia: {{ $train->agency }}</h5>
                          <p class="card-text">Stazione di arrivo: {{ $train->arrival_station}}</p>
                          <p class="card-text"><small class="text-muted">Id: {{ $train->id}}</small></p>
                          <p class="card-text">Numero di carrozze: {{ $train->carriages }}</p>
                          <p class="card-text">Stazione di partenza: {{ $train->departure_station }}</p>
                          <p class="card-text">Orario di partenza: {{ $train->departure_time }}</p>
                          <p class="card-text">Orario di arrivo: {{ $train->arrival_time  }}</p>
                          <p class="card-text">Codice treno: {{ $train->train_code}}</p>
                        </div>
                      </div>
                    </div>
                  </div>
            @endforeach
        </div>
    </div>
</section>

@endsection

@section('title')
    Laravel-Migration-Seeder
@endsection