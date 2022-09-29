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
            $table->string('character_name')->nullable();
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
            $table->string('avatar_path', 2048)->nullable();
            # strength: relationship with Attribute::class
            # dexerity: relationship with Attribute::class
            # constitution: relationship with Attribute::class
            # intelligence: relationship with Attribute::class
            # wisdom: relationship with Attribute::class
            # charisma: relationship with Attribute::class
            $table->string('armor_class')->nullable();
            $table->string('initiative')->nullable();
            $table->string('speed')->nullable();
            $table->string('inspiration')->nullable();
            $table->string('proficiency_bonus')->nullable();
            $table->string('passive_wisdom')->nullable();
            # strength_save: relationship with SavingThrow::class
            # dexterity_save: relationship with SavingThrow::class
            # constitution_save: relationship with SavingThrow::class
            # intelligence_save: relationship with SavingThrow::class
            # wisdom_save: relationship with SavingThrow::class
            # charisma_save: relationship with SavingThrow::class
            # acrobatics: relationship with Skill::class
            # animal_handling: relationship with Skill::class
            # arcana: relationship with Skill::class
            # athletics: relationship with Skill::class
            # deception: relationship with Skill::class
            # history: relationship with Skill::class
            # insight: relationship with Skill::class
            # intimidation: relationship with Skill::class
            # investigation: relationship with Skill::class
            # medicine: relationship with Skill::class
            # nature: relationship with Skill::class
            # perception: relationship with Skill::class
            # performance: relationship with Skill::class
            # persuasion: relationship with Skill::class
            # religion: relationship with Skill::class
            # sleight_hand: relationship with Skill::class
            # stealth: relationship with Skill::class
            # survival: relationship with Skill::class
            $table->string('hit_point_maximum')->nullable();
            $table->text('current_hit_points')->nullable();
            $table->text('temporary_hit_points')->nullable();
            $table->string('hit_dice_total')->nullable();
            $table->text('hit_dice_type')->nullable();
            # death_save_success_1: relationship with DeathSave::class
            # death_save_success_2: relationship with DeathSave::class
            # death_save_success_3: relationship with DeathSave::class
            # death_save_failure_1: relationship with DeathSave::class
            # death_save_failure_2: relationship with DeathSave::class
            # death_save_failure_3: relationship with DeathSave::class
            # weapons: relationship with Weapon::class
            $table->text('attacks_spellcasting_notes')->nullable();
            $table->text('personality_traits')->nullable();
            $table->text('ideals')->nullable();
            $table->text('bonds')->nullable();
            $table->text('flaws')->nullable();
            $table->text('features_traits')->nullable();
            $table->text('other_proficiencies_languages')->nullable();
            $table->text('character_appearance')->nullable();
            $table->text('allies_organizations')->nullable();
            $table->string('group_name')->nullable();
            $table->string('group_symbol_path', 2048)->nullable();
            $table->text('character_backstory')->nullable();
            $table->text('additional_features_traits')->nullable();
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
            # spell_list: relationship with SpellList::class
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
