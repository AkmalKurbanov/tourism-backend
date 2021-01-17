<?php namespace Tours\Tours\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateToursTours3 extends Migration
{
    public function up()
    {
        Schema::table('tours_tours_', function($table)
        {
            $table->text('itinerary');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
        });
    }
    
    public function down()
    {
        Schema::table('tours_tours_', function($table)
        {
            $table->dropColumn('itinerary');
            $table->timestamp('created_at')->nullable()->default('NULL');
            $table->timestamp('updated_at')->nullable()->default('NULL');
            $table->timestamp('deleted_at')->nullable()->default('NULL');
        });
    }
}
