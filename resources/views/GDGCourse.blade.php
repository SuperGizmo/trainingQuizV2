@extends('template.main')

@section('title', 'Green Deal General Training Course')

@section('page_content')
    <div id="app">
        <gdg-course contact-name="{{config('site.ADMIN_NAME')}}" admin-email="{{config('site.ADMIN_EMAIL')}}" company-number="{{config('site.ADMIN_NUMBER')}}"></gdg-course>
    </div>
@endsection
