<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('test', function(Blueprint $table){
            $table->increments('id');       // 主键id
            $table->string('name', 64);     // varchar(64)
            $table->char('password', 32);   // char(32)
            $table->timestamps();           // created_at 和 updated_at 列
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
        Schema::drop('test');
    }
}

