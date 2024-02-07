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
        Schema::create('report_2s', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('expertise_date_time');
            $table->date('term_date');
            $table->date('planting_date');
            $table->integer('weight');
            $table->integer('sales_quantity');
            $table->integer('yield');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('report_2s');
    }
};
