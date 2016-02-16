<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function(Blueprint $table)
        {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('alpha-2', 2);
            $table->string('alpha-3', 3);
            $table->string('country-code');
            $table->string('iso_3166-2');
            $table->string('region');
            $table->string('sub-region');
            $table->string('region-code');
            $table->string('sub-region-code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
}
