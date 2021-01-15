<?php namespace HeroSlider\HeroSlider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHerosliderHeroslider11 extends Migration
{
    public function up()
    {
        Schema::table('heroslider_heroslider_', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('heroslider_heroslider_', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
