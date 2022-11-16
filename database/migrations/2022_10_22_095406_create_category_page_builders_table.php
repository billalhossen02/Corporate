<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryPageBuildersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_page_builders', function (Blueprint $table) {
            $table->id();

            $table->string('category');

            $table->string('banner');
            $table->string('h1');
            $table->string('h2');
            

            $table->unsignedBigInteger('category1')->nullable();
            $table->foreign('category1')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('category2')->nullable();
            $table->foreign('category2')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('category3')->nullable();
            $table->foreign('category3')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('category4')->nullable();
            $table->foreign('category4')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');



            $table->unsignedBigInteger('category5')->nullable();
            $table->foreign('category5')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('category6')->nullable();
            $table->foreign('category6')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('category7')->nullable();
            $table->foreign('category7')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('category8')->nullable();
            $table->foreign('category8')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
           


            $table->unsignedBigInteger('category9')->nullable();
            $table->foreign('category9')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('category10')->nullable();
            $table->foreign('category10')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('category11')->nullable();
            $table->foreign('category11')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('category12')->nullable();
            $table->foreign('category12')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');



            $table->unsignedBigInteger('category13')->nullable();
            $table->foreign('category13')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('category14')->nullable();
            $table->foreign('category14')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('category15')->nullable();
            $table->foreign('category15')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('category16')->nullable();
            $table->foreign('category16')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');

            
            $table->unsignedBigInteger('category17')->nullable();
            $table->foreign('category17')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('category18')->nullable();
            $table->foreign('category18')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('category19')->nullable();
            $table->foreign('category19')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('category20')->nullable();
            $table->foreign('category20')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');

            
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
        Schema::dropIfExists('category_page_builders');
    }
}
