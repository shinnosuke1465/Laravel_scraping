<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MynaviJobs extends Model
{
    use HasFactory;

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
}
