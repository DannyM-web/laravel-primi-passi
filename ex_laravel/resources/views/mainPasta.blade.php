@extends('welcome')

@section('content')

  <div class="cont">
    <h2>LUNGA:</h2>
    <ul>
      @foreach ($lunga as $pasta)
        <li>
          <a href="{{route('showPasta', $pasta['id'])}}">
            {{$pasta['titolo']}}
          </a>
        </li>
      @endforeach
    </ul>
  </div>

  <div class="cont">
    <h2>CORTA:</h2>
    <ul>
      @foreach ($corta as $pasta)
        <li>
          <a href="{{route('showPasta', $pasta['id'])}}">
            {{$pasta['titolo']}}
          </a>
        </li>
      @endforeach
    </ul>
  </div>

  <div class="cont">
    <h2>CORTISSIMA:</h2>
    <ul>
      @foreach ($cortissima as $pasta)
        <li>
          <a href="{{route('showPasta', $pasta['id'])}}">
            {{$pasta['titolo']}}
          </a>
        </li>
      @endforeach
    </ul>
  </div>

@endsection
