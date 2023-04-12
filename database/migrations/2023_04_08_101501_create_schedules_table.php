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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->string('serialday');
            $table->string('numericdate');
            $table->string('monthday');
            $table->string('rtime');
            $table->string('rtitle');
            $table->string('rsubtitle')->nullable();
            $table->string('ptime');
            $table->string('ptitle');
            $table->string('psubtitle')->nullable();
            $table->string('qtime');
            $table->string('qtitle');
            $table->string('qsubtitle')->nullable();
            $table->string('ltime');
            $table->string('ltitle');
            $table->string('lsubtitle')->nullable();
            $table->string('retime');
            $table->string('retitle');
            $table->string('resubtitle')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
