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
            $table->unsignedBigInteger('user_id')->index()->nullable();
            $table->string('status');
            $table->string('type');
            $table->string('category');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('property_face');
            $table->integer('road_width');
            $table->string('road_unit');
            $table->string('road_type');
            $table->integer('built_year')->nullable();
            $table->string('furnish');
            $table->string('kitchen');
            $table->string('bedroom');
            $table->string('bathroom');
            $table->string('living_room');
            $table->string('is_published');
            $table->string('price');
            $table->integer('price_unit');
            $table->string('title');
            $table->string('address_line_1')->nullable();
            $table->string('description')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('set null');
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
