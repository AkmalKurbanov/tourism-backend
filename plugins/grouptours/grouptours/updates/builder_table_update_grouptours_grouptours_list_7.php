<?php namespace Grouptours\Grouptours\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGrouptoursGrouptoursList7 extends Migration
{
    public function up()
    {
        Schema::table('grouptours_grouptours_list', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('grouptours_grouptours_list', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
        });
    }
}
