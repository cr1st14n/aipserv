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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('doc_descripcion');
            $table->string('doc_tipo');
            $table->string('doc_pdf'); // Este campo almacenará el nombre del archivo PDF
            
            $table->unsignedBigInteger('ca_usu');
            $table->integer('ca_est');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documents');
    }
};
