	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
					<a class="navbar-brand" href="/">{{config('site.NAME')}}</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li>
						<a href="/">Home</a>
					</li>
					@if(config('site.URL'))
						<li>
							<a href="https://onboarding.<?php echo config('site.URL');?>">Complete Tasks</a>
						</li>
					@endif
					<li>
						<a href="/disclaimer">Disclaimer</a>
					</li>
					<li>
						<a href="/PrivacyNotice">Privacy Notice</a>
					</li>
					@foreach($pages as $page)
						<li class="hidden-lg hidden-md hidden-sm"><a href="{{$page['url']}}">{{$page['name']}}</a></li>
					@endforeach
				</ul>
			</div>
		</div>
	</nav>
