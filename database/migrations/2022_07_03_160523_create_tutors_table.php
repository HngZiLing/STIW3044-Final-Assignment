<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tutors', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->String('email');
            $table->String('phone');
            $table->String('address');
            $table->String('state');
            $table->String('password');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tutors');
    }
};
