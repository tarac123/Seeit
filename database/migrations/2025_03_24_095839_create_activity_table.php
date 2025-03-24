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
        Schema::create('activities', function (Blueprint $table) {


                $table->id('activity_id');              // Primary Key
                $table->string('activity_name');             
                $table->string('activity_location');         
                $table->text('activity_desc'); 
                $table->text('activity_fullDesc'); 
                $table->string('activity_duration');
                $table->integer('activity_price');  
           

                $table->text('activity_images')->nullable(); // URL to the album's image

                $table->timestamps();
                });
    
            }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
