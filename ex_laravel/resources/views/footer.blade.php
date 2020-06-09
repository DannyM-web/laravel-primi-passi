<ul>
  @isset($footer)

    @foreach ($footer as $link)
      <li>
        <a href="#">{{$link}}</a>
      </li>
    @endforeach
  @endisset
</ul>
