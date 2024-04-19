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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('sitename')->nullable();
            $table->string('sitetitle')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->text('about')->nullable();
            $table->text('vision')->nullable();
            $table->text('core_value')->nullable();
            $table->text('address')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('googleplus')->nullable();
            $table->string('logo')->nullable();
            $table->string('banner')->nullable();
            $table->integer('deleted_at')->nullable();
            $table->integer('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};