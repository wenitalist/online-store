<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('name', 15)->change();
            $table->renameColumn('name', 'login');

            $table->string('email', 30)->change();
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('login', 255)->change();
            $table->renameColumn('login', 'name');

            $table->string('email', 255)->change();
        });
    }
};
