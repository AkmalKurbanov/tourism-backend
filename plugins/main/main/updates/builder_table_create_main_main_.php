<?php namespace Main\Main\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMainMain extends Migration
{
    public function up()
    {
        Schema::create('main_main_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('phone_top');
            $table->text('phone_bottom1');
            $table->text('phone_bottom2');
            $table->text('email');
            $table->text('copyright');
            $table->text('additional_info');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('main_main_');
    }
}
