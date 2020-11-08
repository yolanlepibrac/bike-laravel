<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoadUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('road_user', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->double('lat', 15, 8);
            $table->double('lng', 15, 8);
            $table->double('speed', 8, 2);
            $table->boolean('isBike');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('road_user');
    }
}
