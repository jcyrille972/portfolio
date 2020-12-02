<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Me extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('me',function (Blueprint $table){
        $table->id();
        $table->string('fistname');
        $table->string('lastname');
        $table->string('email');
        $table->string('phone');
        $table->string('adress');
        $table->string('city');
        $table->string('country');
        $table->date('birth_date');
        $table->string('description');

        });//
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('me');
    }
}
