<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSocialLinkToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('meta_link')->nullable()->default('');
            $table->string('meta_description')->nullable()->default('');
            $table->string('facebook')->nullable()->default('');
            $table->string('twitter')->nullable()->default('');
            $table->string('instagram')->nullable()->default('');
            $table->string('LinkedIn')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            //
        });
    }
}
