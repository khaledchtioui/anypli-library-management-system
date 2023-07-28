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
        Schema::create('subscription', function (Blueprint $table) {
            $table->id();


            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('library_id');
            $table->date('registration_date');
            $table->date('registration_end_date');
            // Add other columns as needed

            // Foreign key constraints for the relationships
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->foreign('library_id')
                ->references('id')
                ->on('library')
                ->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscription');
    }
};
