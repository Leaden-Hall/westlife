@component('mail::message')
# Welcome aboard {{$username}}

<br>

Hi there,

<br>

Thanks for signing up to keep in touch with Westlife.com. From now on, you will
get regular updates on Westlife related albums, songs, and news. And since you
have become a part of Westlife Fan Family, you can always enjoy out hit albums
and singles with totaly free of charge.

<br>

But first, Let's get you verified your email address. Click the button below to
verify your email account.

<br>

@component('mail::button', ['url' => 'http://westlife.com/verify/'.$username.'/'.$hash])
Verify
@endcomponent

Cheers,<br>
{{ config('app.name') }}
@endcomponent
