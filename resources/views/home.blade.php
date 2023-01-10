@extends('layouts.main')

@section('content')
  <h1>Tutti i treni</h1>


  @foreach ($all_trains as $train)
    <div
      class="min-h-72 mb-28 p-3 bg-slate-300 shadow-lg shadow-blue-600/80 rounded-xl transition ease-in-out delay-50 duration-300 hover:scale-110 hover:shadow-xl hover:shadow-blue-700/90">


      <div class="w-48 rounded-b-xl h-auto">
        <h5 class="text-black-500 mt-2">{{ $train->company }}</h5>
        <h6 class="text-slate-600 mb-2">Departing From: {{ $train->departing_from }}</h6>
        <h6 class="text-slate-600 mb-2">Arriving At: {{ $train->arriving_at }}</h6>
        <h6 class="text-slate-600 mb-2">Leaving Time: {{ $train->departure_time }}</h6>
        <h6 class="text-slate-600 mb-2">Arrival Time: {{ $train->arrival_time }}</h6>
        <h6 class="text-slate-600 mb-2">Train Code: {{ $train->train_code }}</h6>
        <h6 class="text-slate-600 mb-2">Number of Cars: {{ $train->number_of_cars }}</h6>
        <h6 class="text-slate-600 mb-2">On Time: {{ $train->is_on_time == 1 ? 'Yes' : 'No' }}</h6>
        <h6 class="text-slate-600 mb-2">Cancelled: {{ $train->is_cancelled == 1 ? 'Yes' : 'No' }}</h6>
        <hr>
      </div>

    </div>
  @endforeach
@endsection
