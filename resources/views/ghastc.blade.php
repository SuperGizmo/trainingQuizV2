@extends('template.main')

@section('title', 'General Health and Safety Training Course')

@section('page_content')
	<div id="app">
		<ghastc contact-name="{{config('site.ADMIN_NAME')}}" admin-email="{{config('site.ADMIN_EMAIL')}}" company-number="{{config('site.ADMIN_NUMBER')}}"></ghastc>
	</div>
@endsection
