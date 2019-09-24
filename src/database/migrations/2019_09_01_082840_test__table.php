<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('project_code')->unique()->nullable();
            $table->string('name');
            $table->string('description');
            $table->string('image_path')->unique();
            $table->dateTime('start_at');
            $table->dateTime('end_at');
            $table->boolean('enabled');
            $table->string('default_lang_code');
            $table->string('category_id');
//            $this->addTimestamps($table);
            $table->timestamps();
//            $table->foreign('default_lang_code')->references('code')->on('languages');
//            $table->foreign('category_id')->references('id')->on('categories');
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

