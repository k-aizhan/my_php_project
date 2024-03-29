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
        Schema::create('report_1s', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('bin_id');
            $table->integer('company_id');
            $table->string('grade');
            $table->integer('count');
            $table->integer('cadastral_id');
            $table->integer('amount');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('report_1s');
    }
};
