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
        Schema::create('chat_details', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('id_chat');
            $table->foreignUuid('id_user');
            $table->text('isi');
            $table->timestamps();

            $table->foreign('id_chat')
                ->references('id')
                ->on('chats')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('id_user')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chat_details');
    }
};
