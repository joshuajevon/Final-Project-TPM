<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('namagroup');
            $table->string('namemember');
            $table->string('email1')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->unsignedBigInteger('whatsapp1');
            $table->string('line1');
            $table->string('github1');
            $table->string('place1');
            $table->date('date1');
            $table->string('cv1');
            $table->string('card1');

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
        Schema::dropIfExists('members');
    }
}
