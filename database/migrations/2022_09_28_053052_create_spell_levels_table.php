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
        Schema::create('spell_levels', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('spell_list_id');
            $table->string('level')->nullable();
            $table->string('slots_total')->nullable();
            $table->string('slots_expended')->nullable();
            # spells: relationship with Spell::class
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spell_levels');
    }
};
