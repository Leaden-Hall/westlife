@component('mail::message')
#Hello, {{$contactName}}
<br>
You have made a contact with the following message:

@component('mail::panel')
    {{$contactMessage}}
@endcomponent

<br>
# We will get in touch as soon as possible
<br>
@component('mail::button', ['url' => 'http://westlife.com/'])
Continue Browsing
@endcomponent

Best Regards,<br>
{{ config('app.name') }}
@endcomponent
