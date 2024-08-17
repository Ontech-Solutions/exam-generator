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
<<<<<<< HEAD
            $table->unsignedInteger("program_id");
            $table->unsignedInteger("competency_id");
            $table->string("year");
            $table->string("month")->nullable();
            $table->string("image")->nullable();
            $table->text("question");
            $table->string("option_a");
            $table->string("option_b");
            $table->string("option_c");
            $table->string("option_d");
            $table->string("option_e");
=======
            $table->unsignedInteger("program_id")->nullable();
            $table->unsignedInteger("competency_id")->nullable();
            $table->string("competency")->nullable();
            $table->string("year")->nullable();
            $table->string("month")->nullable();
            $table->string("image")->nullable();
            $table->text("question")->nullable();
            $table->string("option_a")->nullable();
            $table->string("option_b")->nullable();
            $table->string("option_c")->nullable();
            $table->string("option_d")->nullable();
            $table->string("option_e")->nullable();
>>>>>>> af7e90ff84d53e3b0af5b18a8ee4e101fcca3421
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
