@extends('layouts.main')

@section('title', 'Augustin Doat')

@section('content')
  @include('nav-partials.home')
  @include('nav-partials.about')
  @include('nav-partials.portfolio')
  @include('nav-partials.mes-acti')
  @include('nav-partials.contact')
  <div id="contact-cheat"></div> {{-- permet le scroll de la navbar--}}

@endsection