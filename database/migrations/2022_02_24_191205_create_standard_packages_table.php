<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStandardPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('standard_packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('gig_id')->nullable();
            $table->string('title')->nullable();
            $table->string('short_description')->nullable();
            $table->integer('delivery')->nullable();
            $table->integer('revision')->nullable();
            $table->double('amount')->nullable();
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
        Schema::dropIfExists('standard_packages');
    }
}
