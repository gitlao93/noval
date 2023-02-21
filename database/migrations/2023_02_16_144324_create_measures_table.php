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
        Schema::create('measures', function (Blueprint $table) {
            $table->id('measure_ID');
            $table->string('measure');
            $table->unsignedBigInteger('objective_ID');
            $table->unsignedBigInteger('division_ID');
            $table->timestamps();

            $table->foreign('objective_ID')
                ->references('objective_ID')
                ->on('objectives')
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
        Schema::dropIfExists('measures');
    }
};
