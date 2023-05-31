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
    {   Schema::create('classes', function (Blueprint $table) {
        $table->increments('idc');
        $table->string('libelle');
        $table->unsignedSmallInteger('NombreMax');
        $table->unsignedInteger('idformation');
        $table->foreign('idformation')->references('idf')->on('formations');
        $table->timestamps();
    });
}

/**
 * Reverse the migrations.
 */
public function down(): void
{
    Schema::dropIfExists('classe');
}
};
