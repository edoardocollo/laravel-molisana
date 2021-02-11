<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    </head>
    <body>


      <div class="main_container">

        <!-- JUMBOTRON -->
        <div class="jumbotron">
          <img src="{{ asset('img/logo.png')}}" alt="">
        </div>

        <!-- MAIN NAV -->
        <nav class="main_nav">

          <ul>
            <li> <a href="/">home</a> </li>
            <li> <a href="/prodotti">prodotti</a> </li>
            <li> <a href="/contatti">contatti</a> </li>
          </ul>

        </nav>

        <!-- MAIN CONTENT -->
        <div class="main_content" style="background-image: url('{{ asset("img/background.jpg")}}')">
        </div>
      </div>





    </body>
</html>
