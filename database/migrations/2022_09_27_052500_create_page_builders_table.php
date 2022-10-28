<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageBuildersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_builders', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->string('banner');
            $table->string('h1');
            $table->string('h2');

            $table->string('circle1');
            $table->string('ctitle1');
            $table->string('circle2');
            $table->string('ctitle2');
            $table->string('circle3');
            $table->string('ctitle3');

            $table->unsignedBigInteger('section1_id')->nullable();
            $table->foreign('section1_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('section2_id')->nullable();
            $table->foreign('section2_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('section3_id')->nullable();
            $table->foreign('section3_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('section4_id')->nullable();
            $table->foreign('section4_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('sec1_id')->nullable();
            $table->foreign('sec1_id')->references('id')->on('blogs')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('sec2_id')->nullable();
            $table->foreign('sec2_id')->references('id')->on('blogs')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('sec3_id')->nullable();
            $table->foreign('sec3_id')->references('id')->on('blogs')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('sec4_id')->nullable();
            $table->foreign('sec4_id')->references('id')->on('blogs')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('page_builders');
    }
}
