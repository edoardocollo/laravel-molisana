<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    </head>
    <body>


      <div class="main_container">

        <!-- JUMBOTRON -->
        @yield('jumbotron')
        <!-- <div class="jumbotron">
          <img src="{{ asset('img/logo.png')}}" alt="">
        </div> -->

        <!-- MAIN NAV -->
        <nav class="main_nav">

          <ul>
            <li> <a href="/">home</a> </li>
            <li> <a href="/prodotti">prodotti</a> </li>
            <li> <a href="/contatti">contatti</a> </li>
          </ul>

        </nav>
