@extends('template.main')

@section('title', 'Display Screen Equipment Training Course')

@section('page_content')
    <div id="app">
        <display-screen-equipment-training-course contact-name="{{config('site.ADMIN_NAME')}}" admin-email="{{config('site.ADMIN_EMAIL')}}" company-number="{{config('site.ADMIN_NUMBER')}}"></display-screen-equipment-training-course>
    </div>
@endsection
