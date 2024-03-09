<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('references', function (Blueprint $table) {
            $table->id();
            $table->string('title');

            $table->boolean('active')->default(1);
            $table->boolean('status')->default(1);
            $table->integer('rank')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('references');
    }
};
