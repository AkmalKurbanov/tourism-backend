<?php namespace JanVince\SmallRecords\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJanvinceSmallrecordsRecords23 extends Migration
{
    public function up()
    {
        Schema::table('janvince_smallrecords_records', function($table)
        {
            $table->text('faq');
            $table->text('content_blocks')->change();
            $table->text('schedule_tours')->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('janvince_smallrecords_records', function($table)
        {
            $table->dropColumn('faq');
            $table->text('content_blocks')->change();
            $table->text('schedule_tours')->default('NULL')->change();
        });
    }
}
