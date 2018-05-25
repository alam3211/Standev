<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTenant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenant', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_login');
            $table->string('t_name');
            $table->string('t_city');
            $table->string('t_telp');
            $table->string('t_email');
            $table->text('t_description');
            $table->binary('t_product');
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
        Schema::dropIfExists('tenant');
    }
}
