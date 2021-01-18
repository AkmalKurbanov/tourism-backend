<?php namespace Akmal\Introduction\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAkmalIntroduction extends Migration
{
    public function up()
    {
        Schema::table('akmal_introduction_', function($table)
        {
            $table->smallInteger('title');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
        });
    }
    
    public function down()
    {
        Schema::table('akmal_introduction_', function($table)
        {
            $table->dropColumn('title');
            $table->timestamp('created_at')->nullable()->default('NULL');
            $table->timestamp('updated_at')->nullable()->default('NULL');
            $table->timestamp('deleted_at')->nullable()->default('NULL');
        });
    }
}
