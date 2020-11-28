@component('mail::message')
Dear {{$order->first_name.' '.$order->last_name}},

 Your Order id {{$order->order_id}} has been cancelled. please contact with supoort
    for any query.

@component('mail::button', ['url' => route('front.home')])
Visit Our Site
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
