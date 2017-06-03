<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSanpham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('sanphams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ma_sp');
            $table->string('ten_sp');
            $table->string('mo_ta_sp');
            $table->string('so_luong_sp');
            $table->string('hinh_sp');
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
                Schema::drop('sanphams');

    }
}
