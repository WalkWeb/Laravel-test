<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableGenerals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generals', function (Blueprint $table) {
            $table->increments('id'); // столбец id
            $table->string('title', '255'); // Столбец для заголовка title
            $table->string('motto', '255'); // Столбец для девиза
            $table->text('advantages'); // Столбец достоинства
            $table->timestamps(); // даты создания и обновления
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('generals');
    }
}
