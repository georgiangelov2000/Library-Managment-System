<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assign_books', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('book_id')->nullable();
            $table->date('date_of_receipt')->nullable();
            $table->date('date_of_return')->nullable();
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
        Schema::dropIfExists('assign_books');
    }
}
