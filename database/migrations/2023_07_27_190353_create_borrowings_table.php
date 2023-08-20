<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new  class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('borrowings', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->date('borrowDate');
            $table->date('returnDate')->nullable();
            $table->unsignedBigInteger('visitor_id');
            $table->unsignedBigInteger('book_id');

            // Foreign key constraint for the recipient relationship
            $table->foreign('visitor_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->foreign('book_id')
                ->references('id_book')
                ->on('books')
                ->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borrowings');
    }
};
