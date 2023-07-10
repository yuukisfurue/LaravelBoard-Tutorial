<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('prefecture');
            $table->string('gender');
            $table->string('employmentstatus');
            $table->string('company');
            $table->string('jyob');
            $table->string('stay');
            $table->string('affiliation');
            $table->string('postion');
            $table->string('annual');
            $table->string('lastyear');
            $table->timestamps(); // created_at, updated_at
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
