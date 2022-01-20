<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            //ID para la tabla de la BDD
            $table->id();
            //Columnas para la tabla de la BDD
            $table->string('title');
            $table->string('description');
            $table->boolean('state')->default(true);
            //Relación
            $table->unsignedBigInteger('user_id');
            //Un pabellon puede tener muchas carceles y una carcel le pertenece a un pabellon
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('reports');
    }
}
