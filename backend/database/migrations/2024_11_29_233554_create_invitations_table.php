<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
         Schema::create('invitations', function (Blueprint $table) {
            $table->id();
            $table->string('recipient_email', 45);
            $table->foreignId('workspaces_id')->constrained('workspaces')->onDelete('cascade');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('invitations');
    }
};
