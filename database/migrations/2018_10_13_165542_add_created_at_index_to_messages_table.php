<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCreatedAtIndexToMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('messages', function (Blueprint $table) { //Asume que la tabla ya existe (Convencion)
            // $table->index('created_at'); // Forma 1
            $table->index('created_at','my_created_at_index'); // Forma 2
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('messages', function (Blueprint $table) {
            // $table->dropIndex('messages_created_at_index'); // Forma 1 (Convencion)
            $table->dropIndex('my_created_at_index'); // Forma 2
        });
    }
}
