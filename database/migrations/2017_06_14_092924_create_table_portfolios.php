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
            $table->increments('id'); // ������� id
            $table->string('name', '255'); // ��������
            $table->string('description', '255'); // ��������
            $table->string('imagesmall', '255'); // ������ �� ��������� ��������
            $table->string('imagebig', '255'); // ������ �� ������� ��������
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
        Schema::dropIfExists('portfolios');
    }
}
