<?php namespace Akmal\Introduction\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAkmalIntroduction3 extends Migration
{
    public function up()
    {
        Schema::table('akmal_introduction_', function($table)
        {
            $table->text('title')->nullable(false)->unsigned(false)->default(null)->change();
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
        });
    }
    
    public function down()
    {
        Schema::table('akmal_introduction_', function($table)
        {
            $table->smallInteger('title')->nullable(false)->unsigned(false)->default(null)->change();
            $table->timestamp('created_at')->nullable()->default('NULL');
            $table->timestamp('updated_at')->nullable()->default('NULL');
            $table->timestamp('deleted_at')->nullable()->default('NULL');
        });
    }
}
