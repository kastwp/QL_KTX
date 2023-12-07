<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   
    
        public function up()
    {
        Schema::create('phongs', function (Blueprint $table) {
            $table->increments('Maphong');
            $table->integer('MaDay')->unsigned();
            $table->foreign('MaDay')->references('MaDay')->on('days')->onDelete('cascade');
            $table->string('SoNguoiToiDa');
            $table->string('SoNguoiHienTai');
            $table->integer('Gia');
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
        Schema::dropIfExists('phongs');
    }
}
