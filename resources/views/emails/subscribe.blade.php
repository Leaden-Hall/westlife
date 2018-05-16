@component('mail::message')
Hi, there
<br/>
# Thank You for your subscription!
<br/>

You have been added to our mailing list and will now be among the first to hear about:
- New released album and hit single of Westlife
- Latest blog post from our editor team
- And many more to come

@component('mail::button', ['url' => 'http://westlife.com/'])
Stay Tuned
@endcomponent

Best Regards,<br>
{{ config('app.name') }} Team
@endcomponent
