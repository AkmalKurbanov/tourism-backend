<?php namespace JanVince\SmallRecords\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJanvinceSmallrecordsRecords16 extends Migration
{
    public function up()
    {
        Schema::table('janvince_smallrecords_records', function($table)
        {
            $table->text('itinerary_desc');
            $table->string('itinerary_map');
            $table->text('content_blocks')->change();
        });
    }
    
    public function down()
    {
        Schema::table('janvince_smallrecords_records', function($table)
        {
            $table->dropColumn('itinerary_desc');
            $table->dropColumn('itinerary_map');
            $table->text('content_blocks')->change();
        });
    }
}
