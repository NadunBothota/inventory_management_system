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
        Schema::create('inventory_items', function (Blueprint $table) {
            $table->id();
            $table->string('serial_number')->unique();
            $table->foreignId('assigned_user_id')->nullable()->constrained('users');
            $table->string('device_equipment_name');
            $table->string('department');
            $table->string('reference_number');
            $table->decimal('monetary_value', 10, 2);
            $table->enum('working_status', ['working', 'not working'])->default('working');
            $table->foreignId('item_category_id')->constrained('item_categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory_items');
    }
};
