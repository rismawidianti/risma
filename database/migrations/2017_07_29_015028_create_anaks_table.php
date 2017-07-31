<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anaks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->integer('orangtua_id')->unsigned();
            $table->foreign('orangtua_id')->references('id')
                  ->on('orangtuas')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->integer('umur');
            $table->text('alamat');
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
        Schema::dropIfExists('anaks');
    }
}
