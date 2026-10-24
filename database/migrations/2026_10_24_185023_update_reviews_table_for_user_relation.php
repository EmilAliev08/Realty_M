<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('reviews', function (Blueprint $table) {
            // Добавляем user_id
            $table->foreignId('user_id')->after('id')->constrained()->onDelete('cascade');
            
            // Убираем client_name
            $table->dropColumn('client_name');
        });
    }

    public function down(): void
    {
        Schema::table('reviews', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
            $table->string('client_name')->after('id');
        });
    }
};
