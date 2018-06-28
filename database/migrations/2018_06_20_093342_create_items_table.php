<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::create('items', function (Blueprint $table) {
//            $table->increments('id');
//            $table->string('title');
//            $table->text('description');
//            $table->timestamps();
//        });

        Schema::create('requirement', function (Blueprint $table) {
            $table->increments('	RQ_ID');
            $table->string('RQ_TITTLE');
            $table->text('RQ_NOTE');
            $table->text('RQ_REPLY');
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
        Schema::dropIfExists('requirement');
    }
}
