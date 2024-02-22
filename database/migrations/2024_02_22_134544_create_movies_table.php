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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('genre_id')->constrained();
            $table->foreignId('hall_id')->nullable()->constrained();
            $table->string('title');
            $table->text('description');
            $table->string('actors');
            $table->string('producer');
            $table->integer('running_time')->nullable();
            $table->string('image');
            $table->date('publication_date');
            $table->decimal('rating', 3, 1)->nullable();
            $table->string('quality');
            $table->string('slug')->unique();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
