<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLexemesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lexemes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lexeme_item_id')->constrained();
            $table->foreignId('lexeme_meaning_id')->constrained();
            $table->foreignId('lexeme_reading_id')->constrained();
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
        Schema::dropIfExists('lexemes');
    }
}
