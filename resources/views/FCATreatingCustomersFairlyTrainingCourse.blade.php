@extends('template.main')

@section('title', 'FCA Treating Customers Fairly Training Course')

@section('page_content')
    <div id="app">
        <fca-treating-customers-fairly-training-course contact-name="{{config('site.ADMIN_NAME')}}" admin-email="{{config('site.ADMIN_EMAIL')}}" company-number="{{config('site.ADMIN_NUMBER')}}"></fca-treating-customers-fairly-training-course>
    </div>
@endsection
