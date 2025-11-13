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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('name');
            $table->string('type'); // contoh: Rumah, Apartemen, Ruko, Kos, dll
            $table->text('address');
            $table->decimal('price', 15, 2);
            $table->enum('rent_type', ['monthly', 'yearly']); // bulanan / tahunan
            $table->enum('status', ['available', 'booked'])->default('available');
            $table->string('image')->nullable(); // foto properti opsional
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
