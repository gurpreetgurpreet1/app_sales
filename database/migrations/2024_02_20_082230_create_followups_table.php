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
        Schema::create('followups', function (Blueprint $table) {
            $table->id();
            $table->integer('lead_id')->unsigned()->nullable();
            $table->string('status')->nullable();
            $table->string('remarks')->nullable();
            $table->string('attachment')->nullable();
            $table->string('next_meeting')->nullable();
            $table->integer('is_pending')->default(1);
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('followups');
    }
};
