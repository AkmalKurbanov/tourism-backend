<?php namespace Grouptours\Grouptours\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGrouptoursGrouptours11 extends Migration
{
    public function up()
    {
        Schema::table('grouptours_grouptours_', function($table)
        {
            $table->string('title', 65535)->nullable(false)->unsigned(false)->default(null)->change();
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('grouptours_grouptours_', function($table)
        {
            $table->text('title')->nullable(false)->unsigned(false)->default(null)->change();
            $table->timestamp('created_at')->nullable()->default('NULL');
            $table->timestamp('updated_at')->nullable()->default('NULL');
        });
    }
}
