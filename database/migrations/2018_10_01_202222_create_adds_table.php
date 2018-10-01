<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adds', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type' , ['admissions' , 'jobs' , 'tenders']);
            $table->integer('newspaper_id')->unsigned();
            $table->foreign('newspaper_id')
            ->references('id')->on('newspapers')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->integer('qualification_id')->unsigned();
            $table->foreign('qualification_id')
            ->references('id')->on('qualifications')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')
            ->references('id')->on('cities')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')
            ->references('id')->on('categories')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->integer('job_type_id')->unsigned();
            $table->foreign('job_type_id')
            ->references('id')->on('job_types')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->string('qualification');
            $table->string('title');
            $table->string('minimum_requirements');
            $table->date('apply_by');
            $table->date('last_date');
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
        Schema::dropIfExists('adds');
    }
}
