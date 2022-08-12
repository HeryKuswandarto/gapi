<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStasiunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stasiuns', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('gunungapi_id');
            $table->unsignedBigInteger('jenis_id');
            $table->string('code');
            $table->float('latitude', 9, 6);
            $table->float('longitude', 9, 6);
            $table->float('altitude', 6, 2);
            $table->timestamps();

            $table->foreign('gunungapi_id')->references('id')->on('gunungapi')->onDelete('cascade');
            $table->foreign('jenis_id')->references('id')->on('jenisstasiuns')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stasiuns');
    }
}
