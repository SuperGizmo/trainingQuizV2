@extends('template.main')

@section('title', 'Workplace Safety and Welfare Training Course')

@section('page_content')
    <div id="app">
        <workplace-safety-and-welfare-training-course contact-name="{{config('site.ADMIN_NAME')}}" admin-email="{{config('site.ADMIN_EMAIL')}}" company-number="{{config('site.ADMIN_NUMBER')}}"></workplace-safety-and-welfare-training-course>
    </div>
@endsection
