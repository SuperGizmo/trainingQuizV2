@extends('template.main')

@section('title', 'Anti-Bribery Course')

@section('page_content')
    <div id="app">
        <anti-bribery-course contact-name="{{config('site.ADMIN_NAME')}}" admin-email="{{config('site.ADMIN_EMAIL')}}" company-number="{{config('site.ADMIN_NUMBER')}}"></anti-bribery-course>
    </div>
@endsection
