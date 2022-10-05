<?php

use App\Traits\ProcessesFieldsConfig;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    use ProcessesFieldsConfig;

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

            $this->addFields($table, config('fields.spell_list'));
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
