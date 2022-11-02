<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secondary_category_student', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('student_id')->constrained()->comment('外部キー');
            $table->foreignId('secondary_category_id')->constrained()->comment('外部キー');
            
            //ここにカラムを追加
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('secondary_category_student');
    }
};
