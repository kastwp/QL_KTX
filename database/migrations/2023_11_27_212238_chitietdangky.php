<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Chitietdangky extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietdangkys', function (Blueprint $table) {
            $table->increments('MaDK');
            $table->integer('mssv')->unsigned();
            $table->foreign('mssv')->references('mssv')->on('sinhviens')->onDelete('cascade');
            $table->integer('MaPhong')->unsigned();
            $table->foreign('MaPhong')->references('MaPhong')->on('phongs')->onDelete('cascade');
            $table->integer('MaNV')->unsigned();
            $table->foreign('MaNV')->references('MaNV')->on('nhanviens')->onDelete('cascade');
            $table->date('NgayDangky');
            $table->date('NgayTraPhong');
            $table->string('TinhTrang');
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
        //
    }
}
