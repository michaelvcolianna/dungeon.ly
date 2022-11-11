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
        Schema::create('death_saves', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('character_id');

            $table->string('kind')->nullable();
            $table->string('number')->nullable();
            $table->boolean('is_checked')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('death_saves');
    }
};
