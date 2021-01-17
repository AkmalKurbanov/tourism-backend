<?php namespace Tours\Tours\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateToursTours31 extends Migration
{
    public function up()
    {
        Schema::table('tours_tours_', function($table)
        {
            $table->smallInteger('type_title');
        });
    }
    
    public function down()
    {
        Schema::table('tours_tours_', function($table)
        {
            $table->dropColumn('type_title');
        });
    }
}
