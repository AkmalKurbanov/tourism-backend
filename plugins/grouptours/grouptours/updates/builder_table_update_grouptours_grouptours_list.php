<?php namespace Grouptours\Grouptours\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateGrouptoursGrouptoursList extends Migration
{
    public function up()
    {
        Schema::rename('grouptours_grouptours_', 'grouptours_grouptours_list');
    }
    
    public function down()
    {
        Schema::rename('grouptours_grouptours_list', 'grouptours_grouptours_');
    }
}
