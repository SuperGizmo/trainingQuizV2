@extends('template.main')
@section('title', $title)
@section('page_content')
	<div id="app">
		<dynamic-quiz quiz-title="{{$title}}" quiz-quiz="{{$quiz}}"  questions-url="{{$questionsUrl}}" send-url="{{$sendUrl}}"></dynamic-quiz>
	</div>
@endsection
