<?php namespace Grouptours\Grouptours\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGrouptoursGrouptoursList3 extends Migration
{
    public function up()
    {
        Schema::table('grouptours_grouptours_list', function($table)
        {
            $table->decimal('prise', 10, 0)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('grouptours_grouptours_list', function($table)
        {
            $table->smallInteger('prise')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
