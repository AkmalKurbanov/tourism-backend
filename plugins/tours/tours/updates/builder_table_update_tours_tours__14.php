<?php namespace Tours\Tours\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateToursTours14 extends Migration
{
    public function up()
    {
        Schema::table('tours_tours_', function($table)
        {
            $table->text('detalied_desc');
        });
    }
    
    public function down()
    {
        Schema::table('tours_tours_', function($table)
        {
            $table->dropColumn('detalied_desc');
        });
    }
}
