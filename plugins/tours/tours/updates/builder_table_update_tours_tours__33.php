<?php namespace Tours\Tours\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateToursTours33 extends Migration
{
    public function up()
    {
        Schema::table('tours_tours_', function($table)
        {
            $table->dropColumn('tours_id');
            $table->dropColumn('type_id');
        });
    }
    
    public function down()
    {
        Schema::table('tours_tours_', function($table)
        {
            $table->integer('tours_id')->unsigned();
            $table->integer('type_id')->unsigned();
        });
    }
}
