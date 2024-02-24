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
        Schema::create('message', function (Blueprint $table) {
            $table->id();
            $table->string('email'); // 수신자 이메일
            $table->string('receiver_number'); // 수신번호
            $table->string('sender_number'); // 발신번호
            $table->string('title'); // 타이틀
            $table->text('content'); // 내용
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('message');
    }
};
