<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsCreate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('event_name');
            $table->date('event_date');
            $table->time('event_time');
            $table->string('event_location');
            $table->string('image_path')->nullable();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->mediumText('event_description');
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
        Schema::drop('events');
    }
}
