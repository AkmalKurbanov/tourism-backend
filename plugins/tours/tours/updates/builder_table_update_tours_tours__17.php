<?php namespace Tours\Tours\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateToursTours17 extends Migration
{
    public function up()
    {
        Schema::table('tours_tours_', function($table)
        {
            $table->boolean('published')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('tours_tours_', function($table)
        {
            $table->dropColumn('published');
        });
    }
}
