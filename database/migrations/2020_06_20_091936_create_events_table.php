<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable()->default('');
            $table->text('content')->nullable();
            $table->string('excerpt')->nullable()->default('');
            $table->string('image')->nullable()->default('');
            $table->string('start_date')->nullable()->default('');
            $table->string('end_date')->nullable()->default('');
            $table->enum('type',['events'])->nullable();

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
        Schema::dropIfExists('events');
    }
}
