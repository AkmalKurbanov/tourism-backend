<?php namespace Grouptours\Grouptours\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGrouptoursGrouptours extends Migration
{
    public function up()
    {
        Schema::table('grouptours_grouptours_', function($table)
        {
            $table->integer('prise');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('grouptours_grouptours_', function($table)
        {
            $table->dropColumn('prise');
            $table->timestamp('created_at')->nullable()->default('NULL');
            $table->timestamp('updated_at')->nullable()->default('NULL');
        });
    }
}
