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
        Schema::create('exam_questions', function (Blueprint $table) {
            $table->id();

            $table->unsignedInteger("program_id")->nullable();
            $table->unsignedInteger("competency_id")->nullable();
            $table->string("year")->nullable();
            $table->string("month")->nullable();
            $table->string("image")->nullable();
            $table->text("question")->nullable();
            $table->string("option_a")->nullable();
            $table->string("option_b")->nullable();
            $table->string("option_c")->nullable();
            $table->string("option_d")->nullable();
            $table->string("option_e")->nullable();
            $table->string("correct_answer")->nullable();
            $table->unsignedInteger("user_id")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exam_questions');
    }
};
