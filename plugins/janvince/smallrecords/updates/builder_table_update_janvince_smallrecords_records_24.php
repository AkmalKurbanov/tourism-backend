<?php namespace JanVince\SmallRecords\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJanvinceSmallrecordsRecords24 extends Migration
{
    public function up()
    {
        Schema::table('janvince_smallrecords_records', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->text('content_blocks')->change();
            $table->text('schedule_tours')->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('janvince_smallrecords_records', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->text('content_blocks')->change();
            $table->text('schedule_tours')->default('NULL')->change();
        });
    }
}
