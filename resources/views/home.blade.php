@extends('layout.layout')


@section('title')
  home
@endsection


@section('jumbotron')
  @include('partials._jumbotron')
@endsection


@section('main_content')
  @include('partials._home_content')
@endsection
