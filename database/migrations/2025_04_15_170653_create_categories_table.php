<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/YYYY_MM_DD_create_categories_table.php
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->id('id_category');
            $table->foreignId('business_id')->constrained('business','id_business')->onDelete('cascade');
            $table->foreignId('category_mother_id')->nullable()->constrained('category','id_category')->onDelete('set null');
            $table->string('name');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
