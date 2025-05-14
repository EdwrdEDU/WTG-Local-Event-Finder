<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('organizer')->nullable();
            $table->text('description');
            $table->unsignedBigInteger('category_id');
            $table->enum('event_type', ['in-person', 'online', 'hybrid']);
            $table->string('image_path');

            $table->date('start_date');
            $table->time('start_time');
            $table->string('venue_name')->nullable();
            $table->string('address')->nullable();
            $table->json('tickets')->nullable();

            $table->boolean('agree_terms')->default(false);
            $table->boolean('is_published')->default(false);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
