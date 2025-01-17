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
        Schema::create('dbtable', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('name',50);
            $table->string('email',50);
            $table->string('password',50);
            $table->date('dob');
            $table->string('address');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dbtable');
    }
};
