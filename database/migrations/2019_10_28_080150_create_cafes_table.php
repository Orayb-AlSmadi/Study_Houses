<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCafesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cafes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cafe_name');
            $table->string('address');
            $table->unsignedBigInteger('seats');
            $table->boolean('smoking')->default(0);
            $table->boolean('projector')->default(0);
            $table->boolean('food')->default(0);
            $table->boolean('cafe')->default(0);
            $table->boolean('drawing_table')->default(0);
            $table->timestamps();
        });
    }

//INSERT INTO cafes(cafe_name,address,seats,smoking,projector,food,cafe,drawing_table) VALUES ('gloria','Amman',100,0,1,1,1,0);
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cafes');
    }
}
