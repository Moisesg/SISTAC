<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('progress', function (Blueprint $table) {
            $table->increments('id',10);
            $table->integer('idTarea',false)->index();        
            $table->integer('porcentaje',false);        
            $table->text("comentario");
            $table->timestamp("fechaComentario");
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
        //
        Schema::drop('progress');        

    }
}
