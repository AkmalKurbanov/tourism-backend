<?php namespace HeroSlider\HeroSlider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHerosliderHeroslider14 extends Migration
{
    public function up()
    {
        Schema::table('heroslider_heroslider_', function($table)
        {
            $table->dropColumn('active');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('heroslider_heroslider_', function($table)
        {
            $table->text('active');
            $table->timestamp('created_at')->nullable()->default('NULL');
            $table->timestamp('updated_at')->nullable()->default('NULL');
        });
    }
}
