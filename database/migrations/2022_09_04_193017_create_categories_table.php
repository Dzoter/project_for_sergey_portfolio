<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('categories');
            $table->timestamps();

        });


        DB::table('categories')->insert([
            ['categories' => 'Arches'],
            ['categories' => 'Vertical'],
            ['categories' => 'Horizontal'],
            ['categories' => 'Ready-made solutions'],
            ['categories' => 'Double'],
            ['categories' => 'Expensive Euros'],
            ['categories' => 'European'],
            ['categories' => 'Made of glass'],
            ['categories' => 'Calumbaria'],
            ['categories' => 'Combo double'],
            ['categories' => 'Combo with hood'],
            ['categories' => 'Combined'],
            ['categories' => 'Crosses'],
            ['categories' => 'Memorial complexes'],
            ['categories' => 'Muslim'],
            ['categories' => 'For three'],
            ['categories' => 'Plinth'],
            ['categories' => 'Chapels'],
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
