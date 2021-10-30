@extends('template.main')
@section('title', $title)
@section('page_content')
    <div id="app">
        <dynamic-course course-name="{{$title}}" course-topics="{{ $courseTopics }}" send-url="{{ $sendUrl }}" pages-url="{{ $pagesUrl }}" contact-name="{{config('site.ADMIN_NAME')}}" admin-email="{{config('site.ADMIN_EMAIL')}}" company-number="{{config('site.ADMIN_NUMBER')}}"></dynamic-course>
    </div>
@endsection
