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
       Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username', 45);
            $table->string('email', 45)->unique();
            $table->string('password', 45);
            $table->timestamps();
        });
    }

    public function down(): void
    {

    }
};
