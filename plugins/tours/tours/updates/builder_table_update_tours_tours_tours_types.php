<?php namespace Tours\Tours\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateToursToursToursTypes extends Migration
{
    public function up()
    {
        Schema::table('tours_tours_tours_types', function($table)
        {
            $table->dropPrimary(['tour_id','type_id']);
            $table->integer('id')->unsigned();
            $table->primary(['tour_id','type_id','id']);
        });
    }
    
    public function down()
    {
        Schema::table('tours_tours_tours_types', function($table)
        {
            $table->dropPrimary(['tour_id','type_id','id']);
            $table->dropColumn('id');
            $table->primary(['tour_id','type_id']);
        });
    }
}
