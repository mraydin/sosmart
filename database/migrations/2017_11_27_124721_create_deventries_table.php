<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeventriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deventries', function (Blueprint $table) {
            $table->string('mac',24)->nullable();
            $table->string('ip', 16)->nullable();
            $table->string('direction', 4)->nullable();
            $table->string('time', 32)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deventries');
    }
}
