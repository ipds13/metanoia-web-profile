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
        Schema::create('why_choose_two_items', function (Blueprint $table) {
            $table->id();
            $table->text('heading')->nullable();
            $table->text('subheading')->nullable();
            $table->text('photo_over_text')->nullable();
            $table->text('photo_over_heading')->nullable();
            $table->text('photo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('why_choose_two_items');
    }
};
