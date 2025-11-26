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
            // For SQLite, recreate the table to avoid foreign key issues
            Schema::rename('workout_logs', 'workout_logs_old');

            Schema::create('workout_logs', function (Blueprint $table) {
                $table->id();
                $table->foreignId('user_id')->constrained()->onDelete('cascade');
                $table->date('workout_date')->nullable();
                $table->timestamps();
            });

            // Copy data, excluding workout_id and name (name not added yet)
            DB::insert('INSERT INTO workout_logs (id, user_id, workout_date, created_at, updated_at) SELECT id, user_id, NULL, created_at, updated_at FROM workout_logs_old');

            Schema::drop('workout_logs_old');
        } else {
            Schema::table('workout_logs', function (Blueprint $table) {
                $table->dropForeign(['workout_id']);
                $table->dropColumn('workout_id');
                $table->date('workout_date')->after('user_id')->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('workout_logs', function (Blueprint $table) {
            // Revert the changes by adding the workout_id back
            $table->foreignId('workout_id')->constrained()->onDelete('cascade');

            // Remove the newly added workout_date column
            $table->dropColumn('workout_date');
        });
    }
};
