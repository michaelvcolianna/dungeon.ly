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
        Schema::create('saving_throws', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes(); # Proficient
            $table->foreignId('character_id');

            $this->addFields($table, config('fields.saving_throw'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('saving_throws');
    }
};
