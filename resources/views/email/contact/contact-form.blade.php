@component('mail::message')
# Introduction

The body of your message.
<p>Bonjour Cher admin 
    vous avez reçu un message de la part de {{$datas['name']}}
</p>
@component('mail::button', ['url' => ''=>'mailto:'$data ['mail']])
Contactez le
@endcomponent

@component('mail::button', ['url' => ''=>'mailto:'$data ['mail']])
Appelez-le
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
