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
        Schema::create('address', function (Blueprint $table) {
            $table->id();
            $table->string('public_place');
            $table->integer('number');
            $table->string('neighborhood');
            $table->string('complement');
            $table->string('city');
            $table->unsignedBigInteger('state_id');
            $table->timestamp('deleted_at')->default(null)->nullable();
            $table->timestamps();

            $table->foreign('state_id')->references('id')->on('states');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('address');

    }
};
