<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_id',20)->default(0);
            $table->string('first_name');
            $table->string('last_name');
            $table->string('country');
            $table->string('street_address');
            $table->string('city');
            $table->string('postcode');
            $table->string('phone');
            $table->string('email');
            $table->float('total_amount',9,2);
            $table->enum('payment_method',['card','cod']);
            $table->enum('status',['Pending','Processing','Shipped','Canceled','Delivered'])->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
