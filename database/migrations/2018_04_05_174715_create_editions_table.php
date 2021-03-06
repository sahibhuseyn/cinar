<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('editions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('edition_category_id');
            $table->foreign('edition_category_id')->references('id')->on('edition_categories')->onDelete('cascade');
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('image');
            $table->string('pages');
            $table->string('answer');
            $table->string('isbn');
            $table->string('class');
            $table->string('author');
            $table->string('press');
            $table->string('page_count');
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
        Schema::dropIfExists('editions');
    }
}
