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
        Schema::table('trains', function (Blueprint $table) {
            //
            $table->string('type_of_trains', 50)->after('company');
            $table->tinyInteger('strating_platform')->nullable()->after('arrival_time');
            $table->tinyInteger('arrival_platform')->nullable()->after('arrival_time');
            $table->boolean('wifi')->nullable()->after('number_of_carriages');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            //
            $table->dropColumn(['type_of_trains', 'strating_platform', 'arrival_platform', 'wifi']);
        });
    }
};
