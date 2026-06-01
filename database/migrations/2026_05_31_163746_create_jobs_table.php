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
    Schema::create('job_applications', function (Blueprint $table) {
        $table->id();
        $table->string('company');
        $table->string('role');
        $table->string('location')->nullable();
        $table->enum('status', ['applied', 'interview', 'offer', 'rejected'])->default('applied');
        $table->string('job_url')->nullable();
        $table->text('notes')->nullable();
        $table->date('applied_at');
        $table->date('follow_up_at')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_applications');
    }
};
