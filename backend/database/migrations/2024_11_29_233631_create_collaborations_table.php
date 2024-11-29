<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('collaborations', function (Blueprint $table) {
            $table->id();
            $table->string('role', 45);
            $table->foreignId('users_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('workspaces_id')->constrained('workspaces')->onDelete('cascade');
            $table->foreignId('invitations_id')->nullable()->constrained('invitations')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('collaborations');
    }
};
