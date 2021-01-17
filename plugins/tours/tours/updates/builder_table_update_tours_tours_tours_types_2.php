<?php namespace Tours\Tours\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateToursToursToursTypes2 extends Migration
{
    public function up()
    {
        Schema::table('tours_tours_tours_types', function($table)
        {
            $table->integer('tour_id')->unsigned()->change();
            $table->integer('type_id')->unsigned()->change();
        });
    }
    
    public function down()
    {
        Schema::table('tours_tours_tours_types', function($table)
        {
            $table->integer('tour_id')->unsigned(false)->change();
            $table->integer('type_id')->unsigned(false)->change();
        });
    }
}
