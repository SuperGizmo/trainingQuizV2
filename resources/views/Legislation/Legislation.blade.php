@extends('template.main')
@section('title', $title)
@section('page_content')
    <div id="app">
        <dynamic-legislation legislation-name="{{$title}}" send-url="{{ $sendUrl }}" links-url="{{ $LinksUrl }}" heading="{{ $heading }}" contact-name="{{config('site.ADMIN_NAME')}}" admin-email="{{config('site.ADMIN_EMAIL')}}" company-number="{{config('site.ADMIN_NUMBER')}}"></dynamic-legislation>
    </div>
@endsection
