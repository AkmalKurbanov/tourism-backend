<?php namespace JanVince\SmallRecords\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJanvinceSmallrecordsRecords27 extends Migration
{
    public function up()
    {
        Schema::table('janvince_smallrecords_records', function($table)
        {
            $table->integer('category_id')->nullable()->change();
            $table->text('content_blocks')->change();
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('janvince_smallrecords_records', function($table)
        {
            $table->integer('category_id')->nullable(false)->change();
            $table->text('content_blocks')->change();
            $table->timestamp('created_at')->nullable()->default('NULL');
            $table->timestamp('updated_at')->nullable()->default('NULL');
        });
    }
}
