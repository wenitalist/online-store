<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('purchase_items')) {
            Schema::create('purchase_items', function (Blueprint $table) {
                $table->id()->primary();
                $table->foreignId('purchase_id')->constrained('purchases');
                $table->foreignId('product_id')->constrained('products');
                $table->unsignedInteger('quantity');
                $table->unsignedInteger('sum_price');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('purchase_items');
    }
};
