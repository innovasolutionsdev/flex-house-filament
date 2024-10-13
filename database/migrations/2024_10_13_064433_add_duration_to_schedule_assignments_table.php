<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('schedule_assignments', function (Blueprint $table) {

            Schema::table('schedule_assignments', function (Blueprint $table) {
                $table->integer('duration')->nullable()->after('status'); // Adds the 'duration' column after 'schedule_id'
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('schedule_assignments', function (Blueprint $table) {

            $table->dropColumn('duration'); // Rollback the 'duration' column
        });
    }
};
