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
        Schema::create('marks', function (Blueprint $table) {
            //datatype of rows and names
            $table->id();
            $table->timestamps();
            $table->integer('student_id');
            $table->integer('teacher_id');
            $table->string('subject');
            $table->string('mark');
            $table->string('teacher_name');
            $table->string('theme');
            $table->date('date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marks');
    }
};
