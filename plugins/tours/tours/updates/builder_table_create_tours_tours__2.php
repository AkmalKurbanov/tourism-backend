<?php namespace Tours\Tours\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateToursTours2 extends Migration
{
    public function up()
    {
        Schema::create('tours_tours_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->string('title');
            $table->text('annotation');
            $table->decimal('price', 10, 0);
            $table->decimal('duration', 10, 0);
            $table->string('slug');
            $table->text('tour_img');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('tours_tours_');
    }
}
