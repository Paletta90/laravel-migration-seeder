<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda', 100) -> nullable();
            $table->string('Stazione di partenza');
            $table->string('Stazione di arrivo');
            $table->time('Orario di partenza');
            $table->time('Orario di arrivo');
            $table->integer('Codice treno');
            $table->tinyInteger('Numero carrozze');
            $table->boolean('In orario') -> default(true);
            $table->boolean('Cancellato') -> defautl(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
}
