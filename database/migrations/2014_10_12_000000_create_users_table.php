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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->string('sexe')->nullable();
            $table->string('phone')->nullable();
            $table->string('id_link')->nullable();
            $table->string('type')->nullable();
            $table->float('solde')->nullable();
            $table->integer('status')->default(0);
            $table->string('remarque')->nullable();
            $table->string('flag')->nullable();
            $table->string('slug')->nullable();
            $table->string('other-info')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
