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
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('user_id');
            $table->foreignId('team_id');

            $table->boolean('is_npc')->default(false);
            $table->string('avatar_path', 2048)->nullable();
            $table->string('name')->nullable();
            $table->string('class_level')->nullable();
            $table->string('background')->nullable();
            $table->string('race')->nullable();
            $table->string('alignment')->nullable();
            $table->string('experience_points')->nullable();
            $table->string('age')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('eyes')->nullable();
            $table->string('skin')->nullable();
            $table->string('hair')->nullable();
            $table->text('personality_traits')->nullable();
            $table->text('ideals')->nullable();
            $table->text('bonds')->nullable();
            $table->text('flaws')->nullable();
            $table->text('features_traits')->nullable();
            $table->text('other_proficiencies_languages')->nullable();
            $table->text('character_appearance')->nullable();
            $table->text('character_backstory')->nullable();
            $table->text('allies_organizations')->nullable();
            $table->string('group_name')->nullable();
            $table->string('group_symbol_path', 2048)->nullable();
            $table->string('inspiration')->nullable();
            $table->string('proficiency_bonus')->nullable();
            $table->string('passive_wisdom')->nullable();
            $table->string('armor_class')->nullable();
            $table->string('initiative')->nullable();
            $table->string('speed')->nullable();
            $table->string('hit_point_maximum')->nullable();
            $table->text('current_hit_points')->nullable();
            $table->text('temporary_hit_points')->nullable();
            $table->string('hit_dice_total')->nullable();
            $table->text('hit_dice_type')->nullable();
            $table->text('attacks_spellcasting_notes')->nullable();
            $table->string('cp')->nullable();
            $table->string('sp')->nullable();
            $table->string('ep')->nullable();
            $table->string('gp')->nullable();
            $table->string('pp')->nullable();
            $table->text('equipment')->nullable();
            $table->text('treasure')->nullable();
            $table->string('spellcasting_class')->nullable();
            $table->string('spellcasting_ability')->nullable();
            $table->string('spell_save_dc')->nullable();
            $table->string('spell_attack_bonus')->nullable();
            $table->text('cantrips')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characters');
    }
};
