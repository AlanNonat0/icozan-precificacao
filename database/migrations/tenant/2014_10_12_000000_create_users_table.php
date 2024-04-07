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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('cellphone');
            $table->string('document');
            $table->unsignedBigInteger('type_id')->default(2); // 1 owner | 2 collaborator
            $table->unsignedBigInteger('document_type_id')->default(1);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamp('deleted_at')->default(null)->nullable();
            $table->timestamps();

            $table->foreign('document_type_id')->references('id')->on('document_types');
            $table->foreign('type_id')->references('id')->on('user_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
