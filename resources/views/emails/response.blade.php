@component('mail::message')
# Hi There
<br>
A while ago, you have made a contact with the following message:

@component('mail::panel')
    {{$question}}
@endcomponent

<br>
And, here is our answer
@component('mail::panel')
    {{$answer}}
@endcomponent

@component('mail::button', ['url' => 'http://westlife.com/'])
    Continue Browsing
@endcomponent

Best Regards,<br>
{{ $signature }}
@endcomponent
