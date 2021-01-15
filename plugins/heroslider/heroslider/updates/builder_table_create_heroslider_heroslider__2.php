<?php namespace HeroSlider\HeroSlider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHerosliderHeroslider2 extends Migration
{
    public function up()
    {
        Schema::create('heroslider_heroslider_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('title');
            $table->text('sub_title');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('heroslider_heroslider_');
    }
}
