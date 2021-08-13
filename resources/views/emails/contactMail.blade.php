@component('mail::message')

<b>Name</b> {{$data['name']}}
<b>Email</b> {{$data['email']}}
<b>Phone Number</b> {{$data['number']}}
<b>Subject</b> {{$data['subject']}}
<b>Message</b> {{$data['content']}}


The body of your message.

@component('mail::button', ['url' => 'mailto:'.$data['email']])
Reply to {{$data['name']}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
