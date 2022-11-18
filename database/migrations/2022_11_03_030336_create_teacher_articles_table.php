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
        Schema::create('teacher_articles', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('teacher_id')->constrained()->comment('外部キー');
            $table->foreignId('student_article_id')->constrained()->comment('外部キー');
            $table->foreignId('prefecture_id')->constrained()->comment('外部キー');
            
            $table->string('title')->comment('タイトル');
            $table->string('place')->comment('場所');
            $table->integer('fee')->comment('金額');
            $table->dateTime('date')->comment('日程');
            $table->integer('min_number')->comment('最低参加人数');
            $table->integer('max_number')->comment('最高参加人数');
            $table->time('time')->comment('授業時間');
            $table->text('body')->comment('本文');
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
        Schema::dropIfExists('teacher_articles');
    }
};
