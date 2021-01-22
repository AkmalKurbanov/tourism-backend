<?php namespace JanVince\SmallRecords\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJanvinceSmallrecordsRecords5 extends Migration
{
    public function up()
    {
        Schema::table('janvince_smallrecords_records', function($table)
        {
            $table->text('tour_cost');
            $table->smallInteger('tour_duration');
            $table->text('content_blocks')->change();
        });
    }
    
    public function down()
    {
        Schema::table('janvince_smallrecords_records', function($table)
        {
            $table->dropColumn('tour_cost');
            $table->dropColumn('tour_duration');
            $table->text('content_blocks')->change();
        });
    }
}
