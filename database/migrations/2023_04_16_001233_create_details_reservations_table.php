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
        Schema::create('details_reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('reservation_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('chamber_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('prix');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details_reservations');
    }
};
