<?php namespace Grouptours\Grouptours\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateGrouptoursGrouptours2 extends Migration
{
    public function up()
    {
        Schema::create('grouptours_grouptours_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->text('title');
            $table->text('annotation');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('grouptours_grouptours_');
    }
}
