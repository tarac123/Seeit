<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('reviews', function (Blueprint $table) {
            // Remove the old homestay_id column
            $table->dropForeign(['homestay_id']);
            $table->dropColumn('homestay_id');

            // Add polymorphic columns
            $table->morphs('reviewable'); // Creates `reviewable_id` and `reviewable_type`
        });
    }

    public function down()
    {
        Schema::table('reviews', function (Blueprint $table) {
            $table->foreignId('homestay_id')->nullable()->constrained()->onDelete('cascade');
            $table->dropColumn(['reviewable_id', 'reviewable_type']);
        });
    }
};

