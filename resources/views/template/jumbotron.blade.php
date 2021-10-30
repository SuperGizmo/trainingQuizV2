<div class="jumbotron" style="background-image:url('{{ config('site.JUMBOTRON_IMAGE') }}'); background-color: {{ config('site.JUMBOTRON_BACKGROUND_COLOUR') }};">
    <div class="container">
        @if(config('site.JUMBOTRON_LOGO') != "")
            <div class="col-xs-12 col-md-3">
                <img src="{{config('site.JUMBOTRON_LOGO')}}" class="img-responsive text-center" style="padding-top: 40px;" />
            </div>
        @endif
        <div class="col-xs-12 col-md-9" style="color:{{ config('site.JUMBOTRON_TEXT_COLOUR', '#FFFFFF') }}">
            <h1>{{config('site.JUMBOTRON_HEADING')}}</h1>
            <p style="padding-top: 41px;"><small>{{config('site.JUMBOTRON_TEXT')}}</small></p>
        </div>
    </div>
</div>
