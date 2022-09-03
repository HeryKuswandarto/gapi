<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSejarahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sejarahs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gunungapi_id');
            $table->insignedInteger('tahun');
            $table->unsignedInteger('vei');
            $table->text('keterangan',2000);
            $table->timestamps();

            $table->foreign('gunungapi_id')->references('id')->on('gunungapi')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sejarahs');
    }
}
