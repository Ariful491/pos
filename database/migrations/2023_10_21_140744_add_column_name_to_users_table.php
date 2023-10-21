<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('prefix', 250);
            $table->tinyInteger('is_active')->default(1)->comment('0=inactive & 1= active');
            $table->tinyInteger('is_enable_service_staff_pin')->default(0)->comment('0=inactive & 1= active');
            $table->json('access_location')->comment('all locations , awesome shop');
            $table->string('service_staff_pin');
            $table->string('first_name', 250);
            $table->string('last_name', 250);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
