

@extends('layout.layout')


@section('title')
  {{$prodotto['titolo']}}
@endsection

@section('jumbotron')
  @include('partials._jumbotron')
@endsection


@section('main_content')

@include('partials._print_product')

@endsection
