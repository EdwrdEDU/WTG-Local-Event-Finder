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
    Schema::table('events', function (Blueprint $table) {
        $table->string('location')->after('description');
        $table->string('image')->nullable()->after('location');
        $table->boolean('is_featured')->default(false)->after('image');
    });
}

public function down()
{
    Schema::table('events', function (Blueprint $table) {
        $table->dropColumn(['location', 'image', 'is_featured']);
    });
}
};
