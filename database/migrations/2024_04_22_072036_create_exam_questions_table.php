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
            $table->unsignedInteger("program_id");
            $table->string("year");
            $table->string("month");
            $table->string("image")->nullable();
            $table->text("question");
            $table->string("option_a");
            $table->string("option_b");
            $table->string("option_c");
            $table->string("option_d");
            $table->string("correct_answer");
            $table->unsignedInteger("user_id");
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
