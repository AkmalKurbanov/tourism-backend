<?php namespace Grouptours\Grouptours\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGrouptoursGrouptours5 extends Migration
{
    public function up()
    {
        Schema::table('grouptours_grouptours_', function($table)
        {
            $table->text('img_group_tour');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('grouptours_grouptours_', function($table)
        {
            $table->dropColumn('img_group_tour');
            $table->timestamp('created_at')->nullable()->default('NULL');
            $table->timestamp('updated_at')->nullable()->default('NULL');
        });
    }
}
