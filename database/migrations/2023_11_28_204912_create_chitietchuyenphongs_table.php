<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChitietchuyenphongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('chitietchuyenphongs', function (Blueprint $table) {
                $table->increments('MaCP');
                $table->string('Mssv');
                $table->integer('MaPhongO')->unsigned();
                $table->foreign('MaPhongO')->references('MaPhong')->on('phongs')->onDelete('cascade');
                $table->integer('MaPhongChuyen')->unsigned();
                $table->foreign('MaPhongChuyen')->references('MaPhong')->on('phongs')->onDelete('cascade');
                $table->string('LyDo');
                $table->string('TinhTrang');
                $table->date('NgayDangKy');
                $table->date('NgayChuyen');
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
        Schema::dropIfExists('chitietchuyenphongs');
    }
}
