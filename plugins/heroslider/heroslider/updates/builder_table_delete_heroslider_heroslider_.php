<?php namespace HeroSlider\HeroSlider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteHerosliderHeroslider extends Migration
{
    public function up()
    {
        Schema::dropIfExists('heroslider_heroslider_');
    }
    
    public function down()
    {
        Schema::create('heroslider_heroslider_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('slider_item_img');
            $table->text('title');
            $table->text('sub_title');
            $table->timestamp('created_at')->nullable()->default('NULL');
            $table->timestamp('updated_at')->nullable()->default('NULL');
        });
    }
}
