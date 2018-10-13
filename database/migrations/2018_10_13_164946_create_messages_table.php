<?php

/*
 * Para creat una migracion usamos:
 * $ php artisan make:migration create_messages_table --create messages
 * 
 * Para modificar atributos o agregar columnas en tabla existente
 * $ php artisan make:migration add_created_at_index_to_messages_table --table messages
 *
 * Volver atras una migration en la historia
 * $ php artisan migrate:rollback
 * Eliminar todas las migrations en la historia
 * $ php artisan migrate:reset
 * Rehacer todas las migrations
 * $ php artisan migrate:refresh
 * 
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps(); // Crea created_at y updated_at
            $table->string('content');
            $table->string('image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
