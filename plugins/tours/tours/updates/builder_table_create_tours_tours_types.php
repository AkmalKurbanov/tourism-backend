<?php namespace Tours\Tours\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateToursToursTypes extends Migration
{
    public function up()
    {
        Schema::create('tours_tours_types', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('type_title');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('tours_tours_types');
    }
}
