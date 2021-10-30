@extends('template.main')

@section('title', 'Risk Assessment Training Course')

@section('page_content')
    <div id="app">
        <risk-assessment-training-course contact-name="{{config('site.ADMIN_NAME')}}" admin-email="{{config('site.ADMIN_EMAIL')}}" company-number="{{config('site.ADMIN_NUMBER')}}"></risk-assessment-training-course>
    </div>
@endsection
