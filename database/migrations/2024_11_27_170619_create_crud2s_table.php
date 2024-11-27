<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('crud2s', function (Blueprint $table) {
            $table->id();
            $table->String("name");
            $table->String("email");
            $table->String("password");
            $table->String("address");
            $table->String("gender");
            $table->String("date");
            $table->String("course");
            $table->String("img");
            $table->String("hobbies");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crud2s');
    }
};
