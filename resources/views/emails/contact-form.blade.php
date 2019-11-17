@component('mail::message')
# New Message

<strong>Name</strong> {{ $data['name'] }}
<br>
<strong>Email</strong> {{ $data['email'] }}
<br>
<strong>Message</strong> {{ $data['message'] }}

@component('mail::button', ['url' => config('app.url')])
    Visit website
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
