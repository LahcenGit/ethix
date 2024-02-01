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
            $table->float('valuation')->nullable();
            $table->string('profitability');
            $table->float('obj_revenu')->nullable();
            $table->float('obj_financement');
            $table->string('type');
            $table->string('footage')->nullable();
            $table->integer('nbr_bedroom')->nullable();
            $table->integer('nbr_bathroom')->nullable();
            $table->integer('nbr_ethix')->nullable();
            $table->integer('reserve')->nullable();
            $table->float('acquisition_price')->nullable();
            $table->integer('remuneration_ethix')->nullable();
            $table->float('notary_fees')->nullable();
            $table->float('money_reserve_acquisition')->nullable();
            $table->float('rent_collected')->nullable();
            $table->float('charge')->nullable();
            $table->integer('property_tax')->nullable();
            $table->float('money_reserve_rendement')->nullable();
            $table->integer('max_ethix');

            $table->float('total_valorisation')->nullable();
            $table->float('total_acquisition')->nullable();

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
