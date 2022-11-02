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
        Schema::create('student_articles', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('student_id')->constrained()->comment('外部キー');
            $table->foreignId('teacher_id')->nullable()->constrained()->comment('外部キー');
            $table->foreignId('secondary_category_id')->constrained()->comment('外部キー');
            $table->foreignId('prefecture_id')->constrained()->comment('外部キー');
            
            $table->string('title')->comment('タイトル');
            $table->string('place')->comment('場所');
            $table->string('desered_fee')->comment('希望金額');
            $table->string('desered_date')->comment('希望日程');
            $table->text('body')->comment('本文');
            $table->tinyInteger('status')->comment('ステータス');
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
        Schema::dropIfExists('student_articles');
    }
};
