<?php namespace JanVince\SmallRecords\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteJanvinceSmallrecordsSights extends Migration
{
    public function up()
    {
        Schema::dropIfExists('janvince_smallrecords_sights');
    }
    
    public function down()
    {
        Schema::create('janvince_smallrecords_sights', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('sight_map', 191);
            $table->text('sight_desc');
            $table->timestamp('created_at')->nullable()->default('NULL');
            $table->timestamp('updated_at')->nullable()->default('NULL');
        });
    }
}
