<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('activity', function (Blueprint $table) {
            $table->increments('id',10);
            $table->integer('idPersonalAsignado',false)->index();
            $table->integer('idAsignador',false);        
            $table->text('tarea');
            $table->string("ticketReferencia",10);
            $table->timestamp("fechaInicioTarea");
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
        Schema::drop('activity');        
    }
}
