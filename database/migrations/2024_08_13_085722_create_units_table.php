<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('symbol')->unique();
            $table->float('conversion_factor_to_base');
            $table->float('conversion_factor_from_base');
            $table->boolean('is_base_unit');
            $table->foreignId('unit_type_id')
                ->constrained('unit_types')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('unit_system_id')
                ->constrained('unit_systems')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('units');
    }
};
