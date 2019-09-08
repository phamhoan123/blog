<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('levels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_level');
        });

        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mail')->nullable('false');
            $table->string('username')->nullable('false');
            $table->string('password')->nullable('false');
            $table->date('birthday');
            $table->tinyInteger('sex');
            $table->integer('levels_id')->unsigned();
            $table->foreign('levels_id')->references('id')->on('levels');

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
