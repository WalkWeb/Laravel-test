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
            $table->increments('id'); // ������� id
            $table->string('title', '255'); // ������� ��� ��������� title
            $table->string('motto', '255'); // ������� ��� ������
            $table->text('advantages'); // ������� �����������
            $table->timestamps(); // ���� �������� � ����������
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
