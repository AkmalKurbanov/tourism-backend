<?php namespace Tours\Tours\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateToursTours13 extends Migration
{
    public function up()
    {
        Schema::table('tours_tours_', function($table)
        {
            $table->dropColumn('tour_img');
        });
    }
    
    public function down()
    {
        Schema::table('tours_tours_', function($table)
        {
            $table->text('tour_img');
        });
    }
}
