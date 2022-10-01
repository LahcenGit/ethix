<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investorproperties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('investor_id')->nullable();
            $table->unsignedBigInteger('property_id')->nullable();
            $table->integer('nbr_ethix');
            $table->float('value_ethix');
            $table->string('date')->nullable();
            $table->string('hour')->nullable();
            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
            $table->foreign('investor_id')->references('id')->on('investors')->onDelete('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('investorproperties');
    }
};
