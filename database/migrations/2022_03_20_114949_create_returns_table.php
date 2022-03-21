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
        Schema::create('returns', function (Blueprint $table) {
            $table->id();
            $table->integer('stu_id')->unique();
            $table->integer('librarian_id')->unique();
            $table->integer('book_id')->unique();
            $table->date('return_date');
            $table->string('remark');
            $table->foreign('book_id')->references('id')->on('book')->onDelete('cascade');
            $table->foreign('stu_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('librarian_id')->references('id')->on('librarian')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('returns');
    }
};
