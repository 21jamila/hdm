<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   // database/migrations/xxxx_xx_xx_create_books_table.php

public function up()
{
    Schema::create('books', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('author');
        $table->year('publication_year');
        $table->string('category');
        $table->boolean('is_available')->default(true); // Available by default
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('books');
}

   
};
