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
        Schema::create('SubjectProfessors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subject_id')
                ->constrained('Subject')
                ->onDelete('cascade');
            $table->foreignId('professor_id')
                ->constrained('Professors')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('SubjectProfessors');
    }
};
