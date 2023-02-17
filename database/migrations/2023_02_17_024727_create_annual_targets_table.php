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
        Schema::create('annual_targets', function (Blueprint $table) {
            $table->id('annual_target_ID');
            $table->unsignedBigInteger('measure_ID');
            $table->unsignedBigInteger('province_ID');
            $table->integer('annual_target');
            $table->timestamps();

            $table->foreign('measure_ID')
                ->references('measure_ID')
                ->on('measures')
                ->onDelete('restrict');

            $table->foreign('province_ID')
                ->references('province_ID')
                ->on('provinces')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('annual_targets');
    }
};
