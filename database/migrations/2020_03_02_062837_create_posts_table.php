<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('title')->nullable()->default('');
            $table->text('content')->nullable();
            $table->string('excerpt')->nullable()->default('');
            $table->string('image')->nullable()->default('');
            $table->string('logo_image')->nullable()->default('');
            $table->enum('type',['homepage_banner','testimonial','content','news','school_partner','recruiter_partner','student_partner','steps','services','packages','work','team','pages','about','client','products','portfolio'])->nullable();

            $table->string('slug')->unique();
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
        Schema::dropIfExists('posts');
    }
}
