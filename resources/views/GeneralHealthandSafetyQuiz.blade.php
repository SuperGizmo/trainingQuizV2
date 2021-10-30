@extends('template.main')

@section('title', 'General Health and Safety Quiz')

@section('page_content')
    <div id="app">
        <general-health-and-safety-quiz contact-name="{{config('site.ADMIN_NAME')}}" admin-email="{{config('site.ADMIN_EMAIL')}}" company-number="{{config('site.ADMIN_NUMBER')}}"></general-health-and-safety-quiz>
    </div>
@endsection
