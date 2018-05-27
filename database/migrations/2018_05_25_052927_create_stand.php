<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStand extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stand', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('e_id');
            $table->float('s_length',8,2);
            $table->float('s_width',8,2);
            $table->integer('s_price');
            $table->integer('s_available');
            $table->string('s_type');
            $table->text('s_fac_desc')->nullable();
            $table->string('s_photo');
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
        Schema::dropIfExists('stand');
    }
}
