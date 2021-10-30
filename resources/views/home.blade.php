@extends('template.main')

@section('title', 'Welcome')

@section('page_content')
	<div class="col-xs-12 col-sm-9">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Welcome</h3>
			</div>
			<div class="panel-body">
				{{ config('site.WELCOME_TEXT') }}
			</div>
		</div>
	</div>
@endsection