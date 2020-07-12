<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentManagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_manages', function (Blueprint $table) {
            $table->id();
            $table->integer('type');
            $table->integer('section');
            $table->string('title');
            $table->string('image')->nullable();
            $table->string('fullurl')->nullable();
            $table->string('url')->nullable();
            $table->text('details');
            $table->integer('status');
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
        Schema::dropIfExists('content_manages');
    }
}
