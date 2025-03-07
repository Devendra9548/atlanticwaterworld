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
        Schema::create('booking_successes', function (Blueprint $table) {
            $table->id();
            $table->string('type_of_ticket')->nullable();
            $table->string('date_of_visit')->nullable();
            $table->integer('no_of_adults')->nullable();
            $table->integer('tp_noofadults')->nullable();
            $table->integer('no_of_children')->nullable();
            $table->integer('tp_noofchildren')->nullable();
            $table->integer('no_of_citizens')->nullable();
            $table->integer('tp_noofcitizens')->nullable();
            $table->integer('total_visitors')->nullable();
            $table->integer('total_price')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_successes');
    }
};
