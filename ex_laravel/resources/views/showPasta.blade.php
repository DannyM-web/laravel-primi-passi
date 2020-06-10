@extends('welcome')

@section('content')
  <div class="card">
    <h1>{{$pasta['titolo']}}</h1>
    <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
    <p>{!! $pasta['descrizione'] !!}</p>

  </div>


@endsection
