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
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->string('photo_title', 100);
            $table->unsignedBigInteger('user_id');
            $table->string('photo_url', 100);
            $table->string('sample_url', 100);
            $table->unsignedBigInteger('category');
            $table->unsignedBigInteger('price');
            $table->boolean('is_approved')->default(false);
            $table->boolean('is_hidden')->default(false);
            $table->boolean('is_deleted')->default(false);
            $table->timestamp('upload_at')->useCurrent();
            $table->timestamp('update_at')->useCurrent()->useCurrentOnUpdate();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category')->references('id')->on('categories')->onDelete('restrict');
            $table->foreign('price')->references('id')->on('prices')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photos');
    }
};
