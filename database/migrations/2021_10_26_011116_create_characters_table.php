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
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('team_id');

            $table->json('acrobatics')->nullable();
            $table->text('additional_features_traits')->nullable();
            $table->string('age')->nullable();
            $table->string('affiliation')->nullable();
            $table->string('alignment')->nullable();
            $table->text('allies_organizations')->nullable();
            $table->json('animal_handling')->nullable();
            $table->string('appearance', 2048)->nullable();
            $table->json('arcana')->nullable();
            $table->string('armor_class')->nullable();
            $table->json('athletics')->nullable();
            $table->text('attacks_spellcasting')->nullable();
            $table->string('background')->nullable();
            $table->text('backstory')->nullable();
            $table->text('bonds')->nullable();
            $table->json('charisma')->nullable();
            $table->string('class_level')->nullable();
            $table->json('constitution')->nullable();
            $table->json('death_saves')->nullable();
            $table->json('deception')->nullable();
            $table->json('dexterity')->nullable();
            $table->text('equipment')->nullable();
            $table->string('experience_points')->nullable();
            $table->string('eyes')->nullable();
            $table->text('features_traits')->nullable();
            $table->text('flaws')->nullable();
            $table->string('hair')->nullable();
            $table->string('height')->nullable();
            $table->json('history')->nullable();
            $table->json('hit_dice')->nullable();
            $table->json('hit_points')->nullable();
            $table->text('ideals')->nullable();
            $table->string('initiative')->nullable();
            $table->json('insight')->nullable();
            $table->string('inspiration')->nullable();
            $table->json('intelligence')->nullable();
            $table->json('intimidation')->nullable();
            $table->json('investigation')->nullable();
            $table->json('medicine')->nullable();
            $table->json('money')->nullable();
            $table->string('name')->nullable();
            $table->json('nature')->nullable();
            $table->text('other_proficiencies_languages')->nullable();
            $table->string('passive_wisdom')->nullable();
            $table->json('perception')->nullable();
            $table->json('performance')->nullable();
            $table->text('personality_traits')->nullable();
            $table->json('persuasion')->nullable();
            $table->string('proficiency_bonus')->nullable();
            $table->string('race')->nullable();
            $table->json('religion')->nullable();
            $table->string('skin')->nullable();
            $table->json('sleight_of_hand')->nullable();
            $table->string('speed')->nullable();
            $table->string('spell_attack_bonus')->nullable();
            $table->string('spell_save_dc')->nullable();
            $table->json('spell_levels')->nullable();
            $table->string('spellcasting_class')->nullable();
            $table->string('spellcasting_ability')->nullable();
            $table->json('spells')->nullable();
            $table->json('stealth')->nullable();
            $table->json('strength')->nullable();
            $table->json('survival')->nullable();
            $table->string('symbol', 2048)->nullable();
            $table->text('treasure')->nullable();
            $table->json('weapons')->nullable();
            $table->string('weight')->nullable();
            $table->json('wisdom')->nullable();

            $table->timestamps();
            $table->softDeletes();
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
