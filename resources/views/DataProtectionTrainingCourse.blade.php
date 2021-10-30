@extends('template.main')

@section('title', 'FCA Compliance Training Course 2')

@section('page_content')
    <div id="app">
        <data-protection-training-course contact-name="{{config('site.ADMIN_NAME')}}" admin-email="{{config('site.ADMIN_EMAIL')}}" company-number="{{config('site.ADMIN_NUMBER')}}"></data-protection-training-course>
    </div>
@endsection
