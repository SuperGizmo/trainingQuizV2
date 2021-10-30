@extends('template.main')

@section('title', 'Green Deal Assessor Training Course')

@section('page_content')
    <div id="app">
        <gda-course contact-name="{{config('site.ADMIN_NAME')}}" admin-email="{{config('site.ADMIN_EMAIL')}}" company-number="{{config('site.ADMIN_NUMBER')}}"></gda-course>
    </div>
@endsection
