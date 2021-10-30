@extends('template.main')
@section('title', 'Level 2 Health And Safety in the Workplace Training')
@section('page_content')
    <div id="app">
        <health-safety-in-the-workplace-training contact-name="{{config('site.ADMIN_NAME')}}" admin-email="{{config('site.ADMIN_EMAIL')}}" company-number="{{config('site.ADMIN_NUMBER')}}"></health-safety-in-the-workplace-training>
    </div>
@endsection
