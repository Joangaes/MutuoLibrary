<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_infos', function (Blueprint $table) {
            $table->increments('book_info_id');
            $table->timestamps();
            $table->string('title');
            $table->date('date_published');
            $table->integer('pages');
            $table->char('isbn',13);
            $table->string('genre');
            $table->string('editorial');
            $table->string('owner');
            $table->integer('library_id')->unsigned();

            $table->foreign('library_id')
            ->references('library_id')
            ->on('libraries')
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
        Schema::dropIfExists('book_infos');
    }
}
