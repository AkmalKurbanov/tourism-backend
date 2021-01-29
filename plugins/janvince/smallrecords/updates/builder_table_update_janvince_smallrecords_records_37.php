<?php namespace JanVince\SmallRecords\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJanvinceSmallrecordsRecords37 extends Migration
{
    public function up()
    {
        Schema::table('janvince_smallrecords_records', function($table)
        {
            $table->integer('category_id')->default(null)->change();
            $table->dateTime('date')->default(null)->change();
            $table->text('content_blocks')->change();
            $table->dateTime('date1')->nullable()->change();
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('janvince_smallrecords_records', function($table)
        {
            $table->integer('category_id')->default(NULL)->change();
            $table->dateTime('date')->default('NULL')->change();
            $table->text('content_blocks')->change();
            $table->dateTime('date1')->nullable(false)->change();
            $table->dateTime('date2')->nullable(false)->change();
            $table->timestamp('created_at')->nullable()->default('NULL');
            $table->timestamp('updated_at')->nullable()->default('NULL');
        });
    }
}
