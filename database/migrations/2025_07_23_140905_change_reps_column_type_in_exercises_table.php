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

public function up()
{
    if (DB::getDriverName() !== 'sqlite') {
//        Schema::table('exercises', function ($table) {
//            $table->string('reps')->change();
//        });
    }
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('exercises', function (Blueprint $table) {
            //
            $table->integer('reps')->change();
        });
    }
};
