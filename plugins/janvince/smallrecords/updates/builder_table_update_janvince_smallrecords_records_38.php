<?php namespace JanVince\SmallRecords\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJanvinceSmallrecordsRecords38 extends Migration
{
    public function up()
    {
        Schema::table('janvince_smallrecords_records', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->integer('category_id')->default(null)->change();
            $table->dateTime('date')->default(null)->change();
            $table->text('content_blocks')->change();
            $table->dateTime('date1')->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('janvince_smallrecords_records', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->integer('category_id')->default(NULL)->change();
            $table->dateTime('date')->default('NULL')->change();
            $table->text('content_blocks')->change();
            $table->dateTime('date1')->default('NULL')->change();
            $table->dateTime('date2')->default('NULL')->change();
        });
    }
}
