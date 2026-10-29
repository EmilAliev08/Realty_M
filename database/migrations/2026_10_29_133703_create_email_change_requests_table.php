<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('email_change_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('old_email');
            $table->string('new_email');
            $table->string('verification_code');
            $table->integer('attempts_left')->default(3);
            $table->timestamp('expires_at');
            $table->string('status')->default('pending'); // pending, confirmed, expired
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('email_change_requests');
    }
};
