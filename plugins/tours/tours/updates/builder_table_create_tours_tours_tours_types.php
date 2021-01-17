<?php namespace Tours\Tours\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateToursToursToursTypes extends Migration
{
    public function up()
    {
        Schema::create('tours_tours_tours_types', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('tour_id');
            $table->integer('type_id');
            $table->primary(['tour_id','type_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('tours_tours_tours_types');
    }
}
