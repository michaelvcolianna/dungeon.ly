<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            // Bookkeeping
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('team_id');
            $table->timestamps();
            $table->softDeletes();

            // Character information
            $table->string('character_name')->nullable();
            $table->string('class_level')->nullable();
            $table->string('background')->nullable();
            $table->string('player_name')->nullable();
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
            $table->string('character_appearance', 2048)->nullable();
            $table->text('allies_organizations')->nullable();
            $table->string('affiliation')->nullable();
            $table->string('symbol', 2048)->nullable();
            $table->text('character_backstory')->nullable();
            $table->text('additional_features_traits')->nullable();

            // Attributes
            $table->json('strength')->nullable();
            $table->json('dexterity')->nullable();
            $table->json('constitution')->nullable();
            $table->json('intelligence')->nullable();
            $table->json('wisdom')->nullable();
            $table->json('charisma')->nullable();
            $table->string('passive_wisdom')->nullable();
            $table->text('other_proficiencies_languages')->nullable();
            $table->string('inspiration')->nullable();
            $table->string('proficiency_bonus')->nullable();
            $table->json('strength_saving_throw')->nullable();
            $table->json('dexterity_saving_throw')->nullable();
            $table->json('constitution_saving_throw')->nullable();
            $table->json('intelligence_saving_throw')->nullable();
            $table->json('wisdom_saving_throw')->nullable();
            $table->json('charisma_saving_throw')->nullable();
            $table->string('armor_class')->nullable();
            $table->string('initiative')->nullable();
            $table->string('speed')->nullable();
            $table->json('hit_points')->nullable();
            $table->json('hit_dice')->nullable();
            $table->json('death_save_successes')->nullable();
            $table->json('death_save_failures')->nullable();
            $table->string('spellcasting_class')->nullable();
            $table->string('spellcasting_ability')->nullable();
            $table->string('spell_save_dc')->nullable();
            $table->string('spell_attack_bonus')->nullable();
            $table->json('spell_levels')->nullable();
            $table->json('spells')->nullable();

            // Skills
            $table->json('acrobatics')->nullable();
            $table->json('animal_handling')->nullable();
            $table->json('arcana')->nullable();
            $table->json('athletics')->nullable();
            $table->json('deception')->nullable();
            $table->json('history')->nullable();
            $table->json('insight')->nullable();
            $table->json('intimidation')->nullable();
            $table->json('investigation')->nullable();
            $table->json('medicine')->nullable();
            $table->json('nature')->nullable();
            $table->json('perception')->nullable();
            $table->json('performance')->nullable();
            $table->json('persuasion')->nullable();
            $table->json('religion')->nullable();
            $table->json('sleight_of_hand')->nullable();
            $table->json('stealth')->nullable();
            $table->json('survival')->nullable();

            // Gear
            $table->json('weapons')->nullable();
            $table->text('attacks_spellcasting')->nullable();
            $table->json('money')->nullable();
            $table->text('equipment')->nullable();
            $table->text('treasure')->nullable();
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
}
