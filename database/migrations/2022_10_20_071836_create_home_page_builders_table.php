<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomePageBuildersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_page_builders', function (Blueprint $table) {

            $table->id();

            $table->string('branner1');
            $table->string('branner2');
            $table->string('branner3');

            
            $table->unsignedBigInteger('story1_id')->nullable();
            $table->foreign('story1_id')->references('id')->on('clients')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('story2_id')->nullable();
            $table->foreign('story2_id')->references('id')->on('clients')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('story3_id')->nullable();
            $table->foreign('story3_id')->references('id')->on('clients')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('story4_id')->nullable();
            $table->foreign('story4_id')->references('id')->on('clients')->onDelete('cascade')->onUpdate('cascade');
          
            $table->unsignedBigInteger('story5_id')->nullable();
            $table->foreign('story5_id')->references('id')->on('clients')->onDelete('cascade')->onUpdate('cascade');



            $table->unsignedBigInteger('solution1_id')->nullable();
            $table->foreign('solution1_id')->references('id')->on('blogs')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('solution2_id')->nullable();
            $table->foreign('solution2_id')->references('id')->on('blogs')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('solution3_id')->nullable();
            $table->foreign('solution3_id')->references('id')->on('blogs')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('solution4_id')->nullable();
            $table->foreign('solution4_id')->references('id')->on('blogs')->onDelete('cascade')->onUpdate('cascade');
            

            $table->unsignedBigInteger('success1_id')->nullable();
            $table->foreign('success1_id')->references('id')->on('successes')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('success2_id')->nullable();
            $table->foreign('success2_id')->references('id')->on('successes')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('success3_id')->nullable();
            $table->foreign('success3_id')->references('id')->on('successes')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('home_page_builders');
    }
}
