<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // database/migrations/YYYY_MM_DD_create_businesses_table.php
// database/migrations/YYYY_MM_DD_create_businesses_table.php
public function up()
{
    Schema::create('business', function (Blueprint $table) {
        $table->id('id_business');
        $table->foreignId('owner_id')->constrained('users')->onDelete('cascade');
        $table->string('name');
        $table->string('type');
        $table->string('location');
        $table->string('logo')->nullable();
        $table->string('menu_pdf')->nullable();
        $table->string('menu_type')->default('menu');
        $table->string('cover')->nullable();
        $table->string('color1')->nullable();
        $table->string('color2')->nullable();
        $table->string('color3')->nullable();
        $table->string('website')->nullable();
        $table->string('email')->nullable();
        $table->string('phone')->nullable();
        $table->string('whatsapp')->nullable();
        $table->text('description')->nullable();
        $table->text('google_business')->nullable();
        $table->text('qr_code')->nullable();
        $table->softDeletes();
        $table->timestamps();
    });
}
    public function down(): void
    {
        Schema::dropIfExists('businesses');
    }
};
