<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->char('title');
            $table->string('text', 1000);
            $table->char('icon');
            $table->char('lang', 10)->default('fr');
            $table->unsignedInteger('about_id')->nullable();
            $table->foreign('about_id')
                ->references('id')->on('abouts')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abouts');
    }
}
