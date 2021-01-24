<?php namespace JanVince\SmallRecords\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJanvinceSmallrecordsSights extends Migration
{
    public function up()
    {
        Schema::create('janvince_smallrecords_sights', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('sight_map');
            $table->text('sight_desc');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('janvince_smallrecords_sights');
    }
}
