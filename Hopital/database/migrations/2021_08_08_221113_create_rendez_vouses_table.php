<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRendezVousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rendez_vouses', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            // $table->string('email');
            // $table->string('date');
            $table->string('address');
            $table->string('ville');
            $table->string('cin');
            $table->integer('naissance');
            $table->string('desc');
            $table->unsignedBigInteger('dct_id');
            $table->foreign('dct_id')->references('id')->on('doctors')->onDelete('cascade');
            $table->unsignedBigInteger('ptn_id');
            $table->foreign('ptn_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('rendez_vouses');
    }
}
