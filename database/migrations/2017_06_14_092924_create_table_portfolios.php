<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePortfolios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->increments('id'); // столбец id
            $table->string('name', '255'); // название
            $table->string('description', '255'); // описание
            $table->string('imagesmall', '255'); // ссылка на маленькую картинку
            $table->string('imagebig', '255'); // ссылка на большую картинку
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
        Schema::dropIfExists('portfolios');
    }
}
