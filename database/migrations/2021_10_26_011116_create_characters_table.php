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

            // Dynamic configurations
            foreach(config('dnd.character') as $field => $config)
            {
                if(isset($config['size']))
                {
                    // Image fields
                    $table->{$config['column']}($field, $config['size'])->nullable();
                }
                else
                {
                    // All other fields
                    $table->{$config['column']}($field)->nullable();
                }
            }
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
