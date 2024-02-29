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
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('stagiaire_id');
            $table->unsignedBigInteger('module_id');
            $table->float('grade');
            $table->timestamps();
    
            $table->foreign('stagiaire_id')->references('id')->on('stagaires');
            $table->foreign('module_id')->references('id')->on('modules');
    
            $table->unique(['stagiaire_id', 'module_id']);
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};
