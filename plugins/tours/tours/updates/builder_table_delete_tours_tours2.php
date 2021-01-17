<?php namespace Tours\Tours\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteToursTours2 extends Migration
{
    public function up()
    {
        Schema::dropIfExists('tours_tours_');
    }
    
    public function down()
    {
        Schema::create('tours_tours_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 191);
            $table->text('annotation');
            $table->decimal('price', 10, 0);
            $table->decimal('duration', 10, 0);
            $table->string('slug', 191);
            $table->text('itinerary');
        });
    }
}