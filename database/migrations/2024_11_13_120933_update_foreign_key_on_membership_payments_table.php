<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (DB::getDriverName() === 'sqlite') {
            // For SQLite, recreate table with CASCADE
            Schema::rename('membership_payments', 'membership_payments_old');

            Schema::create('membership_payments', function (Blueprint $table) {
                $table->id();
                $table->foreignId('user_id')->constrained()->onDelete('cascade');
                $table->decimal('amount', 8, 2);
                $table->date('payment_date');
                $table->string('payment_method');
                $table->timestamps();
            });

            // Copy data
            DB::insert('INSERT INTO membership_payments (id, user_id, amount, payment_date, payment_method, created_at, updated_at) SELECT id, user_id, amount, payment_date, payment_method, created_at, updated_at FROM membership_payments_old');

            Schema::drop('membership_payments_old');
        } else {
            Schema::table('membership_payments', function (Blueprint $table) {
                // Drop the existing foreign key
                $table->dropForeign(['user_id']);

                // Re-create the foreign key with ON DELETE CASCADE
                $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
