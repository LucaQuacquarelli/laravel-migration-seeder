<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->string('departure', 50);
            $table->string('arrival', 50);
            $table->date('departure_date');
            $table->date('return_date');
            $table->string('accommodation_type', 20);
            $table->unsignedTinyInteger('rooms');
            $table->unsignedTinyInteger('adults_guests')->default(2);
            $table->unsignedTinyInteger('kids_guests')->nullable(true);
            $table->unsignedTinyInteger('neonates_guests')->nullable(true);
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
        Schema::dropIfExists('travels');
    }
}
