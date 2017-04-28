<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHobbiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('hobbies', function (Blueprint $table) {
            $table->increments('id');
           
            $table->integer('pessoa_id')->unsigned();
            $table->foreign('pessoa_id')
                  ->references('id')
                  ->on('pessoas')
                  ->onDelete('cascade');

            $table->string('hobbie');
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
         Schema::dropIfExists('hobbies');
    }
}
