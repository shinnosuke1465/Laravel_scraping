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
        Schema::create('mynavi_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->string('title');
            $table->string('company_name');
            $table->text('features');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mynavi_jobs');
    }
};
