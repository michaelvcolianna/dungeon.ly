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
        Schema::create('spell_lists', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('character_id');
            $table->text('cantrips')->nullable();
            # spell_level_1: relationship with SpellLevel::class
            # spell_level_2: relationship with SpellLevel::class
            # spell_level_3: relationship with SpellLevel::class
            # spell_level_4: relationship with SpellLevel::class
            # spell_level_5: relationship with SpellLevel::class
            # spell_level_6: relationship with SpellLevel::class
            # spell_level_7: relationship with SpellLevel::class
            # spell_level_8: relationship with SpellLevel::class
            # spell_level_9: relationship with SpellLevel::class
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spell_lists');
    }
};
