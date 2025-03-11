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
        Schema::create('homestay', function (Blueprint $table) {


                $table->id('homestay_id');              // Primary Key
                $table->string('homestay_name');             
                $table->string('homestay_location');         
                $table->text('homestay_desc'); 
                $table->string('homestay_rules');
                $table->integer('homestay_price');  
           
                // $table->string('tracklist')->default('')->change();       // List of tracks (could be text for flexibility)

                $table->text('homestay_images')->nullable(); // URL to the album's image

                $table->timestamps();
                });
    
            }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homestay');
    }
};
