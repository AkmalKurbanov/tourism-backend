<?php namespace HeroSlider\HeroSlider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHerosliderHeroslider extends Migration
{
    public function up()
    {
        Schema::create('heroslider_heroslider_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('slider_item_img');
            $table->text('title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('heroslider_heroslider_');
    }
}
