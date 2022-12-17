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
        Schema::create('user_packages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('processor_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('vga_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('motherboard_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('power_supply_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_packages');
    }
};
