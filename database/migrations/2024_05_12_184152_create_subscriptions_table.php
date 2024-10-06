<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->boolean('status')->default(0);
            $table->string('delivery_time');
            $table->integer('subscription_period');
            $table->date('delivery_date')->nullable();
            $table->integer('price')->nullable();
            $table->string('preference')->nullable();
            $table->integer('Number_of_meals')->nullable();
            $table->integer('Number_of_servings')->nullable();
            $table->string('delivery_address');
            $table->string('city');
            $table->integer('zip');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
    }
};
