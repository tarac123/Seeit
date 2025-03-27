<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up():void
{
    Schema::create('reservations', function (Blueprint $table) {
        $table->id('reservation_id');
        $table->string('reservable_type');
        $table->unsignedBigInteger('reservable_id');
        $table->unsignedBigInteger('user_id')->nullable();
        $table->date('check_in_date');
        $table->date('check_out_date')->nullable();
        $table->integer('guests');
        $table->string('full_name');
        $table->string('email');
        $table->string('phone');
        $table->decimal('total_price', 10, 2);
        $table->enum('status', ['pending', 'confirmed', 'cancelled'])->default('pending');
        $table->timestamps();

        $table->index(['reservable_type', 'reservable_id']);
        $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_reservation');
    }
};
