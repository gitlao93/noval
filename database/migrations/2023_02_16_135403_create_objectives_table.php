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
        Schema::create('objectives', function (Blueprint $table) {
            $table->id('objective_ID');
            $table->string('objective');
            $table->unsignedBigInteger('opcr_ID');
            $table->timestamps();

            $table->foreign('opcr_ID')
                ->references('opcr_ID')
                ->on('opcrs')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('objectives');
    }
};
