<?php namespace Tours\Tours\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateToursToursToursTypes4 extends Migration
{
    public function up()
    {
        Schema::table('tours_tours_tours_types', function($table)
        {
            $table->dropPrimary(['tour_id','type_id']);
            $table->renameColumn('tour_id', 'tours_id');
            $table->primary(['tours_id','type_id']);
        });
    }
    
    public function down()
    {
        Schema::table('tours_tours_tours_types', function($table)
        {
            $table->dropPrimary(['tours_id','type_id']);
            $table->renameColumn('tours_id', 'tour_id');
            $table->primary(['tour_id','type_id']);
        });
    }
}
