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
        Schema::create('comment_lessons', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user')->unsigned();
            $table->integer('id_mentor')->unsigned();
            $table->integer('id_lesson')->unsigned();
            $table->text('comment');
            $table->text('reply');
            $table->string('status');

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
        Schema::dropIfExists('comment_lessons');
    }
};
