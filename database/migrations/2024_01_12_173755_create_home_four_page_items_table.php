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
        Schema::create('home_four_page_items', function (Blueprint $table) {
            $table->id();
            $table->text('service_heading')->nullable();
            $table->text('service_subheading')->nullable();
            $table->text('service_how_many')->nullable();
            $table->text('service_status')->nullable();
            $table->text('marquee_status')->nullable();
            $table->text('welcome_status')->nullable();
            $table->text('portfolio_heading')->nullable();
            $table->text('portfolio_subheading')->nullable();
            $table->text('portfolio_how_many')->nullable();
            $table->text('portfolio_status')->nullable();
            $table->text('why_choose_status')->nullable();
            $table->text('testimonial_heading')->nullable();
            $table->text('testimonial_subheading')->nullable();
            $table->text('testimonial_text')->nullable();
            $table->text('testimonial_status')->nullable();
            $table->text('team_member_heading')->nullable();
            $table->text('team_member_subheading')->nullable();
            $table->text('team_member_how_many')->nullable();
            $table->text('team_member_status')->nullable();
            $table->text('client_status')->nullable();
            $table->text('contact_heading')->nullable();
            $table->text('contact_subheading')->nullable();
            $table->text('contact_status')->nullable();
            $table->text('blog_heading')->nullable();
            $table->text('blog_subheading')->nullable();
            $table->text('blog_how_many')->nullable();
            $table->text('blog_status')->nullable();
            $table->text('map_status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_four_page_items');
    }
};
