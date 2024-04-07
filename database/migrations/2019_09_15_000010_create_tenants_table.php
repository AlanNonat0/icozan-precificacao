<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->string('id')->primary();

            // Personal Data
            $table->unsignedBigInteger('user_id');

            // Payments
            $table->unsignedBigInteger('plan_id')->default(1)->nullable();
            $table->boolean('active')->default(true)->nullable();
            $table->timestamp('last_payment')->default(null)->nullable();
            $table->unsignedInteger('payday')->default(10);
            $table->unsignedInteger('plan_period_per_mounth')->default(1);

            $table->timestamp('deleted_at')->default(null)->nullable();
            $table->timestamps();
            $table->json('data')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('tenants');
    }
}
