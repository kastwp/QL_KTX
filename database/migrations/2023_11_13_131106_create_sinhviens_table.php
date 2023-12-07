<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSinhviensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Sinhviens', function (Blueprint $table) {
            $table->increments('mssv');
            $table->string('HoTen');
            $table->string('GioiTinh');
            $table->date('NgaySinh');
            $table->string('DiaChi');
            $table->string('Sdt');
            $table->string('MatKhau');
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
        Schema::dropIfExists('sinhviens');
    }
}
