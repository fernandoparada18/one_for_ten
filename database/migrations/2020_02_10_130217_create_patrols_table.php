<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatrolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patrols', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('id_card');
            $table->text('address');
            $table->string('phone');
            $table->string('email');
            $table->integer('chief_id')->unsigned();
            $table->foreign('chief_id')->references('id')->on('chiefs')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patrols');
    }
}
