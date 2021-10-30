@extends('template.main')

@section('title', 'Noise, Vibration and Vehicle Safety Training Course')

@section('page_content')
    <div id="app">
        <noise-vibration-and-vehicle-safety-training-course contact-name="{{config('site.ADMIN_NAME')}}" admin-email="{{config('site.ADMIN_EMAIL')}}" company-number="{{config('site.ADMIN_NUMBER')}}"></noise-vibration-and-vehicle-safety-training-course>
    </div>
@endsection

