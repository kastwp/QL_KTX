<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYkiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ykiens', function (Blueprint $table) {
                $table->increments('MaYK');
                $table->integer('mssv')->unsigned();
                $table->string('Chude');
                $table->string('Noidung');
                $table->date('Ngayyk');
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
        Schema::dropIfExists('ykiens');
    }
}
