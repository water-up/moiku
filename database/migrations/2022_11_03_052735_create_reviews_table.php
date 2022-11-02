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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('student_id')->constrained()->comment('外部キー');
            $table->foreignId('teacher_article_id')->constrained()->comment('外部キー');
            
            $table->float('score',8,2)->comment('点数');
            $table->text('body')->comment('本文');
            $table->boolean('attendance')->nullable()->comment('出欠');
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
        Schema::dropIfExists('reviews');
    }
};
