<?php namespace Tours\Tours\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateToursToursTypes3 extends Migration
{
    public function up()
    {
        Schema::table('tours_tours_types', function($table)
        {
            $table->increments('id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('tours_tours_types', function($table)
        {
            $table->dropColumn('id');
        });
    }
}
