<?php namespace Tours\Tours\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateToursTours34 extends Migration
{
    public function up()
    {
        Schema::table('tours_tours_', function($table)
        {
            $table->boolean('published')->nullable()->change();
            $table->dropColumn('type_title');
        });
    }
    
    public function down()
    {
        Schema::table('tours_tours_', function($table)
        {
            $table->boolean('published')->nullable(false)->change();
            $table->smallInteger('type_title');
        });
    }
}
