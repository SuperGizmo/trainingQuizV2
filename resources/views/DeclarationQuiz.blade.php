@extends('template.main')
@section('title', 'Declaration Quiz')
@section('page_content')
  <div id="app">
    <declaration-quiz contact-name="{{config('site.ADMIN_NAME')}}" admin-email="{{config('site.ADMIN_EMAIL')}}" company-number="{{config('site.ADMIN_NUMBER')}}"></declaration-quiz>
  </div>
@endsection
