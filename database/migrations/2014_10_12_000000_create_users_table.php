<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->string('namagroup')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken()->nullable();
            $table->string('binus')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->unsignedBigInteger('whatsapp')->nullable();
            $table->string('line')->nullable();
            $table->string('github')->nullable();
            $table->string('place')->nullable();
            $table->date('date')->nullable();
            $table->string('cv')->nullable();
            $table->string('card')->nullable();
            $table->string('verify')->nullable();
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
}
