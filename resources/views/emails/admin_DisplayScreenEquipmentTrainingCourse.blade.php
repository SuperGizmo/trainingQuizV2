Hi {{ config('site.ADMIN_NAME')}},<br />
<br />
{{ $name }} has completed the Display Screen Equipment Training Course. Please see their details below:<br />
<br />
Name: {{ $name }}<br />
Email: {{ $email }}<br />
Contact Number: {{ $contactNumber }}<br />
Company: {{ $company }}<br />
Address: {{ $address }}<br />
Certificate Download: <a href="{{ $pdf }}">here</a><br />
If the above link does not work, copy and paste this link {{ $pdf }}