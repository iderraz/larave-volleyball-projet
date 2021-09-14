<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("prenom");
            $table->integer("age");
            $table->string("phone");
            $table->string("email");
            $table->foreignId("genre_id")->constrained("genre")->onDelete("cascade")->onUpdate("cascade");
            $table->string("origine");
            $table->foreignId("role_id")->constrained("role")->onDelete("cascade")->onUpdate("cascade");
            $table->foreignId("equipe_id")->constrained("player")->onDelete("cascade")->onUpdate("cascade");
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
        Schema::dropIfExists('player');
    }
}
