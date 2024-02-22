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
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->string('lastname',255);
            $table->string('firstname',255);
            $table->string('email',255);
            $table->string('mobile',255)->nullable();
            $table->foreignId('city_id')
                ->nullable()
                ->constrained();
            $table->string('theme',255);
            $table->mediumText('message');
            $table->string('userfile')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedback');
    }
};
