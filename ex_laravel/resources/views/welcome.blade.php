<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="/css/app.css">
        <script src="/js/app.js" charset="utf-8"></script>

    </head>
    <body>
      <header>
        <div class="container">
          @include('header')
        </div>
      </header>
      <main>
        <div class="container">
          @include('main')
        </div>
      </main>
      <footer>
        <div class="container">
          @include('footer')
        </div>
      </footer>


    </body>
</html>
