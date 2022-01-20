<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJailUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jail_user', function (Blueprint $table) {
            //ID para la tabla de la BDD
            $table->id();
            //Columnas para la tabla de la BDD
            $table->unsignedBigInteger('jail_id');
            $table->unsignedBigInteger('user_id');
            $table->boolean('state')->default(true);
            //Relación
            //Un usuario úede estar en varias carceles y una carcel puede tener muchos usuarios
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            //Un usuario úede estar en varios pabellones y un pabellon puede tener muchos usuarios
            $table->foreign('jail_id')
                ->references('id')
                ->on('jails')
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
        Schema::dropIfExists('jail_user');
    }
}
