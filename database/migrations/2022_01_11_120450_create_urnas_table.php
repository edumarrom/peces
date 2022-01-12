<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUrnasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* ->nullable() */
        Schema::create('urnas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->decimal('ancho', 4, 1);
            $table->decimal('alto', 4, 1);
            $table->decimal('profundo', 4, 1);
            $table->decimal('grosor', 2, 1)->nullable();
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
        Schema::dropIfExists('urnas');
    }
}
