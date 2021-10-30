@extends('template.main')

@section('title', 'FCA Compliance Training Course 1')

@section('page_content')
    <div id="app">
        <fca-compliance-one contact-name="{{config('site.ADMIN_NAME')}}" admin-email="{{config('site.ADMIN_EMAIL')}}" company-number="{{config('site.ADMIN_NUMBER')}}"></fca-compliance-one>
    </div>
@endsection
