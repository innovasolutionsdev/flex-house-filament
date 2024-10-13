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
        Schema::table('exercises', function (Blueprint $table) {
            // Change the 'reps' column to a string
            $table->string('reps')->change();

            // Add a new nullable 'note' column
            $table->text('note')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('exercises', function (Blueprint $table) {
            // Revert 'reps' column back to integer type
            $table->integer('reps')->change();

            // Drop the 'note' column if rolling back the migration
            $table->dropColumn('note');
        });
    }
};
