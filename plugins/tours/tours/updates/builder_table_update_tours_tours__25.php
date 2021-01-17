<?php namespace Tours\Tours\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateToursTours25 extends Migration
{
    public function up()
    {
        Schema::table('tours_tours_', function($table)
        {
            $table->dropColumn('tour_id');
            $table->dropColumn('type_id');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
        });
    }
    
    public function down()
    {
        Schema::table('tours_tours_', function($table)
        {
            $table->integer('tour_id')->unsigned();
            $table->integer('type_id')->unsigned();
            $table->timestamp('created_at')->nullable()->default('NULL');
            $table->timestamp('updated_at')->nullable()->default('NULL');
            $table->timestamp('deleted_at')->nullable()->default('NULL');
        });
    }
}
