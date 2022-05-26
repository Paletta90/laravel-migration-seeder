@extends('layouts.layout')

@section('content')
@forelse ($trainsToday as $train)
<div class="col card">
    <div class="card-body">
      <h5 class="card-title">Stazione partenza: <span class="card-text">{{ $train -> {'Stazione di partenza'} }}</span></h5>
      <h5 class="card-title">Stazione di arrivo: <span class="card-text">{{ $train -> {'Stazione di arrivo'} }}</span></h5>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Data di partenza: {{ $train -> {'Data di partenza'} }}</li>
      <li class="list-group-item">Orario di a partenza: {{ $train -> {'Orario di partenza'} }}</li>
      <li class="list-group-item">Orario di arrivo: {{ $train -> {'Orario di arrivo'} }}</li>
      <li class="list-group-item">Codice treno: {{ $train -> {'Codice treno'} }}</li>
      <li class="list-group-item">Numero carrozze: {{ $train -> {'Numero carrozze'} }}</li>
    </ul>
  </div>
@empty
    <h1>Non ci sono treni</h1>
@endforelse
@endsection