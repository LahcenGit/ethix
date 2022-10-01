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
        Schema::create('ethixs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('investor_id')->nullable();
            $table->float('value');
            $table->integer('nbr_ethix');
            $table->foreign('investor_id')->references('id')->on('investors')->onDelete('cascade');
            $table->string('flug')->nullable();
            $table->string('slug')->nullable();
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
        Schema::dropIfExists('ethixs');
    }
};
