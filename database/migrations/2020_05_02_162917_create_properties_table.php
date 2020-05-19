<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('status');
            $table->string('type');
            $table->string('category');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('property_face');
            $table->string('road_width');
            $table->string('road_unit');
            $table->string('road_type');
            $table->string('built_year');
            $table->string('furnish');
            $table->string('kitchen');
            $table->string('bedroom');
            $table->string('bathroom');
            $table->string('living room');
            $table->string('title');
            $table->string('description');
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
        Schema::dropIfExists('properties');
    }
}
