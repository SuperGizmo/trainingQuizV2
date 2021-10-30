Hi {{ config('site.ADMIN_NAME')}},<br />
<br />
{{ $name }} has completed the {{ $legislationName }}. Please see their details below:<br />
<br />
Name: {{ $name }}<br />
Email: {{ $email }}<br />
Contact Number: {{ $contactNumber }}<br />
Company: {{ $company }}<br />
Address: {{ $address }}<br />
Position: {{ $position }}<br />
Certificate Download: <a href="{{ $pdf }}">here</a><br />
If the above link does not work, copy and paste this link {{ $pdf }}<br /><br />
@if(isset($links_clicked))
<?php
  $links_clicked = explode(',', $links_clicked);
?>
  Here are the links the user has actually visited.
  <ul>
    @if(!is_array($links_clicked))
        <li><a href="{{ $links_clicked }}">{{ $links_clicked }}</a></li>
    @else
      @foreach($links_clicked as $link)
        <li><a href="{{ $link }}">{{ $link }}</a></li>
      @endforeach
    @endif
  </ul>
@else
  No links visited
@endif