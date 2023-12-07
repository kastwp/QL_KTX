<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThongbaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thongbaos', function (Blueprint $table) {
            $table->increments('MaTB');
            $table->integer('mssv')->unsigned();
            $table->integer('MaNV')->unsigned();
            $table->string('Tieude');
            $table->string('Noidung');
            $table->string('Loaitb');
            $table->date('Ngaytb');
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
        Schema::dropIfExists('thongbaos');
    }
}
