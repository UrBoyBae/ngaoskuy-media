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
        Schema::create('subbab', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('id_bab');
            $table->string('name');
            $table->timestamps();

            $table->foreign('id_bab')
                ->references('id')
                ->on('bab')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_babs');
    }
};
