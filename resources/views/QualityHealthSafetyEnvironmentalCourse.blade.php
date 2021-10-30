@extends('template.main')

@section('title', 'Quality, Health and Safety, Environmental Training Course')

@section('page_content')
    <div id="app">
        <quality-health-safety-environmental-course contact-name="{{config('site.ADMIN_NAME')}}" admin-email="{{config('site.ADMIN_EMAIL')}}" company-number="{{config('site.ADMIN_NUMBER')}}"></quality-health-safety-environmental-course>
    </div>
@endsection
