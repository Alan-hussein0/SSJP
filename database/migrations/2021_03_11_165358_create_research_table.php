<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResearchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('research');
        Schema::create('research', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->longText('abstract');
            $table->string('word_file');
            $table->bigInteger('journal_id');
            $table->bigInteger('author_id');
            $table->bigInteger('editor_id');
            $table->timestamps();

            // $table->foreign('author_id')->references('id')->on('author')
            // ->onDelete('cascade');
            // $table->foreign('journal_id')->references('id')->on('journal')
            // ->onDelete('cascade');
            // $table->foreign('editor_id')->references('id')->on('editor')
            // ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('research');
    }
}
