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
        Schema::create('monthly_targets', function (Blueprint $table) {
            $table->id('monthly_target_ID');
            $table->integer('monthly_target')->nullable();
            $table->unsignedBigInteger('annual_target_ID');
            $table->unsignedBigInteger('division_ID');
            $table->timestamps();

            $table->foreign('annual_target_ID')
                ->references('annual_target_ID')
                ->on('annual_targets')
                ->onDelete('restrict');

            $table->foreign('division_ID')
                ->references('division_ID')
                ->on('divisions')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monthly_targets');
    }
};
