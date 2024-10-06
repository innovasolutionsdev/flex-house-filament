<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('cart_id')->nullable();

            $table->string('billing_first_name');
            $table->string('billing_last_name');
            $table->string('billing_post_code');
            $table->string('billing_address');
            $table->string('billing_city');
            $table->string('billing_mobile');
            $table->string('email');

            $table->tinyInteger('delivery_status')->default(0);
            $table->tinyInteger('payment_status')->default(0);

            $table->float('shipping_cost')->nullable();
            $table->float('total');
            $table->string('payment_method')->default('Online');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
