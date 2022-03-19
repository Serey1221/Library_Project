<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('title');
            $table->date('publish_date');
            $table->string('num_of_pages');
            $table->string('num_copies');
            $table->string('edition');
            $table->string('publisher');
            $table->string('booksource');
            $table->integer('booktype_id')->unique();
            $table->foreign('booktype_id')->references('id')->on('books')->onDelete('cascade');
            $table->string('remark');
            
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
};
