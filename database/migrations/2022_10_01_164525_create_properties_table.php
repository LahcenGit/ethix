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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('designation');
            $table->string('addresse');
            $table->longText('description');
            $table->string('valuation')->nullable();
            $table->string('profitability');
            $table->string('obj_revenu')->nullable();
            $table->string('obj_financement');
            $table->string('type');
            $table->string('footage')->nullable();
            $table->integer('nbr_bedroom')->nullable();
            $table->integer('nbr_bathroom')->nullable();
            $table->string('flag')->nullable();
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
        Schema::dropIfExists('properties');
    }
};
