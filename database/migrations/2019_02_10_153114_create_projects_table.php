<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 255);
            $table->longText('body');
            $table->integer('team_id');
            $table->string('category');
            $table->longText('objectives')->nullable();
            $table->integer("duration")->nullable();
            $table->longText('goals')->nullable();
            $table->longText('impact')->nullable();
            $table->longText('monitoring_evaluation')->nullable();
            $table->string('image');
            $table->boolean('is_submitted')->default(false);
            $table->enum('status', ['accepted', 'rejected', 'pending', 'modification'])->default('pending');
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
        Schema::dropIfExists('projects');
    }
}
