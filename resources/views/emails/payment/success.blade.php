@component('mail::message')
    Dear {{$order->first_name.' '.$order->last_name}},

    Your Order Id {{$order->order_id}} has been shipped. you will receive this order
    within next 5 working days.

@component('mail::button', ['url' => route('front.home')])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
