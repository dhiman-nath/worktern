<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasicPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basic_packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('gig_id');
            $table->string('title');
            $table->string('short_description');
            $table->integer('delivery');
            $table->integer('revision');
            $table->double('amount');
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
        Schema::dropIfExists('basic_packages');
    }
}
