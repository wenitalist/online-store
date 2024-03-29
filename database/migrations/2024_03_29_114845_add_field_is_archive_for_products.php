<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasColumn('products', 'supplier_id')) {
            Schema::table('products', function (Blueprint $table) {
                $table->boolean('is_archive')->after('quantity')->default(false);
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasColumn('products', 'is_archive')) {
            Schema::table('products', function (Blueprint $table) {
                $table->dropColumn('is_archive');
            });
        }
    }
};
