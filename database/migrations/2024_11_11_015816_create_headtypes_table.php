<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('headtypes', function (Blueprint $table) {
            $table->id();
            $table->string('head_type_name')->nullable();
            $table->string('head_desc')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('headtypes');
    }
};