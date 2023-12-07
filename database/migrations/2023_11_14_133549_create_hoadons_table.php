<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoadonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoadons', function (Blueprint $table) {
            $table->integer('Mahoadon');
            
            $table->integer('Maphong')->unsigned();
            $table->foreign('Maphong')->references('Maphong')->on('phongs')->onDelete('cascade');
            $table->integer('Thang');
            $table->string('Tiendien');
            $table->string('Tiennuoc');
            $table->string('Tinhtrang');
            $table->timestamps();
            $table->primary(['Thang','Mahoadon']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoadons');
    }
}
