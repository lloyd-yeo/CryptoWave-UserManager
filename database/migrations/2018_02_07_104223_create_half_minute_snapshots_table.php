<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHalfMinuteSnapshotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('half_minute_snapshots', function (Blueprint $table) {
	        $table->increments('id');
	        $table->timestamps();
	        $table->bigInteger('hash_speed')->default(0);
	        $table->bigInteger('hashpower')->default(0);
	        $table->unsignedInteger('user_id')->nullable();
	        $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('half_minute_snapshots');
    }
}
