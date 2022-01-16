<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->LONGTEXT('content')->nullable();
            $table->integer('year')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('book_no')->nullable();
            $table->string('image')->nullable();

             // FOREIGN KEYS
             $table->integer('author_id')->nullable();
            // $table->foreign('author_id')->references('id')->on('authors');

            $table->integer('flag_id')->nullable();
            // $table->foreign('flag_id')->references('id')->on('books_flags');

              // FOREIGN KEYS
            $table->integer('genre_id')->nullable();
            // $table->foreign('gendre_id')->references('id')->on('gendre_books');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
