<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    const STATUS_PENDING = 'Pending';
    const STATUS_PROCESSING = 'Processing';
    const STATUS_SHIPPED = 'Shipped';
    const STATUS_CANCELED = 'Canceled';
    const STATUS_DELIVERED = 'Delivered';

    const PAYMENT_METHOD_CARD ='card';
    const PAYMENT_METHOD_COD = 'cod';

    const PAYMENT_STATUS_PAID = 'paid';
    const PAYMENT_STATUS_UNPAID = 'unpaid';

    public function order_details(){
        return $this->hasMany(OrderDetail::class);
    }
}
