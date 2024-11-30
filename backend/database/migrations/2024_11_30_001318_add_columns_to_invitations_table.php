<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
       Schema::table('invitations', function (Blueprint $table) {
    $table->foreignId('sender_id')->constrained('users')->onDelete('cascade');
    $table->string('token')->unique();
    $table->timestamp('expires_at')->nullable();
    $table->enum('status', ['pending', 'accepted', 'rejected'])->default('pending');
});
    }

    public function down(): void
    {
        Schema::table('invitations', function (Blueprint $table) {
            //
        });
    }
};
