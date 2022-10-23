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
        Schema::create('userinformations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('code_postal')->nullable();
            $table->string('address')->nullable();
            $table->string('cite_of_birth')->nullable();
            $table->string('country_of_residence')->nullable();
            $table->string('country_of_birth')->nullable();
            $table->integer('num_department')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('genre')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('userinformations');
    }
};
