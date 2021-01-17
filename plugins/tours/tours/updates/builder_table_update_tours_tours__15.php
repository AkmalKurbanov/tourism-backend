<?php namespace Tours\Tours\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateToursTours15 extends Migration
{
    public function up()
    {
        Schema::table('tours_tours_', function($table)
        {
            $table->renameColumn('detalied_desc', 'detail_desc');
        });
    }
    
    public function down()
    {
        Schema::table('tours_tours_', function($table)
        {
            $table->renameColumn('detail_desc', 'detalied_desc');
        });
    }
}
