<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jails', function (Blueprint $table) {
          //ID para la tabla de la BDD
          $table->id();
          //Columnas para la tabla de la BDD
          $table->string('name', 45);
          $table->string('code');
          $table->enum('type', ['low', 'medium', 'high']);
          $table->unsignedBigInteger('capacity');
          $table->boolean('state')->default(true);
          //Relación
          $table->unsignedBigInteger('ward_id');
          //Un pabellon puede tener muchas carceles y una carcel le pertenece a un pabellon
          $table->foreign('ward_id')
              ->references('id')
              ->on('wards')
              ->onDelete('cascade')
              ->onUpdate('cascade');
          //columnas que podran aceptar registros null para la tabla de la BDD
          $table->string('description')->nullable();

          //columnas especiales para la tabla de la BDD
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
        Schema::dropIfExists('jails');
    }
}
