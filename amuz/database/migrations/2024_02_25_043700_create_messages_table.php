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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('receiver_number');
            $table->string('sender_number');
            $table->string('title');
            $table->string('image'); // 이미지 파일의 경로를 저장
            $table->text('content');
            $table->boolean('isad'); // isad 필드 추가
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
