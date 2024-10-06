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
        Schema::create('todos', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('title'); // Title of the todo
            $table->text('description'); // Description of the todo
            $table->boolean('completed')->default(false); // Completed status, default is false
            $table->timestamps(); // created_at and updated_at fields
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('todos'); // Drop the table if it exists
    }
};
