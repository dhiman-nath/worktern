<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestedOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requested_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('buyer_id');
            $table->bigInteger('seller_id')->nullable();
            $table->bigInteger('category_id');
            $table->bigInteger('gig_id');
            $table->string('title');
            $table->text('description');
            $table->integer('level')->nullable();
            $table->integer('duration');
            $table->double('amount');
            $table->integer('proposals')->default(0);
            $table->enum('is_reviewed',[0,1])->default(0);
            $table->enum('status',[0,1,2,3,4])->default(0);
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
        Schema::dropIfExists('requested_orders');
    }
}
