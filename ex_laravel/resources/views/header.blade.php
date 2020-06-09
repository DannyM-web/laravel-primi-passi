<div class="navbar">
  <ul>
    @foreach ($navbar as $tasto)
      <li>
        @switch($tasto)
          @case("Chi siamo")
              <a href="www.chisiamo.it">{{$tasto}}</a>
              @break
          @case("Contatti")
              <a href="www.contatti.it">{{$tasto}}</a>
              @break
          @case("Catalogo")
              <a href="www.catalogo.it">{{$tasto}}</a>
              @break
        @endswitch
      </li>
    @endforeach
  </ul>
</div>
