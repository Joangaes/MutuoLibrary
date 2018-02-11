<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('book_id');
            $table->timestamps();
            $table->integer('book_info_id')->unsigned();
            $table->integer('author_id')->unsigned();
            $table->integer('existence');
            $table->integer('loaned');

            $table->foreign('book_info_id')
            ->references('book_info_id')
            ->on('book_infos')
            ->onDelete('cascade');

            $table->foreign('author_id')
            ->references('author_id')
            ->on('authors')
            ->onDelete('cascade');
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
