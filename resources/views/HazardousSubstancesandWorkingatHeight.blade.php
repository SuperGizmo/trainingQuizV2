@extends('template.main')

@section('title', 'Hazardous Substances and Working at Height')

@section('page_content')
    <div id="app">
        <hazardous-substances-and-working-at-height contact-name="{{config('site.ADMIN_NAME')}}" admin-email="{{config('site.ADMIN_EMAIL')}}" company-number="{{config('site.ADMIN_NUMBER')}}"></hazardous-substances-and-working-at-height>
    </div>
@endsection
