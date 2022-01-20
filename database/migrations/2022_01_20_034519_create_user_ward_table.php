<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserWardTable extends Migration
{
    public function up()
    {
    Schema::create('user_ward', function (Blueprint $table) {
        //ID para la tabla de la BDD
        $table->id();
        //Columna para la tabla de la BDD
        $table->unsignedBigInteger('user_id');
        $table->unsignedBigInteger('ward_id');
        $table->boolean('state')->default(true);
        //Relación
        //Un usuario pude estar en varios pabellones y un pabellon puede tener muchos usuarios
        $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        //Un usuario puede estar en varios pabellones y un pabellon puede tener muchos usuarios
        $table->foreign('ward_id')
            ->references('id')
            ->on('wards')
            ->onDelete('cascade')
            ->onUpdate('cascade');



        //columnas especiales para la tabla de la BDD
        $table->timestamps();
    });
    }

    
    public function down()
    {
        Schema::dropIfExists('user_ward');
    }
}
