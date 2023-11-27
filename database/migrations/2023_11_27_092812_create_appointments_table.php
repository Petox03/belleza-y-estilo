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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('clientName');

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('set null');

            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id')
                ->references('id')
                ->on('services')
                ->onDelete('cascade');


            $table->date('date');

            $table->unsignedBigInteger('status_id');
            $table->foreign('status_id')
                ->references('id')
                ->on('status')
                ->onDelete('cascade');

            $table->unsignedBigInteger('schedule_id');
            $table->foreign('schedule_id')
                ->references('id')
                ->on('schedules')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
