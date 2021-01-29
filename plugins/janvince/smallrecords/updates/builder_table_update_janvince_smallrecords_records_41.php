<?php namespace JanVince\SmallRecords\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJanvinceSmallrecordsRecords41 extends Migration
{
    public function up()
    {
        Schema::table('janvince_smallrecords_records', function($table)
        {
            $table->integer('area_id')->default(null)->change();
            $table->integer('category_id')->default(null)->change();
            $table->text('description')->default(null)->change();
            $table->text('content')->default(null)->change();
            $table->string('url', 191)->default(null)->change();
            $table->dateTime('date')->default(null)->change();
            $table->boolean('active')->default(null)->change();
            $table->boolean('favourite')->default(null)->change();
            $table->text('repeater')->default(null)->change();
            $table->text('testimonials')->default(null)->change();
            $table->string('preview_image_media', 191)->default(null)->change();
            $table->integer('sort_order')->default(null)->change();
            $table->text('images_media')->default(null)->change();
            $table->text('content_blocks')->default(null)->change();
            $table->text('custom_repeater')->default(null)->change();
            $table->integer('created_by')->default(null)->change();
            $table->integer('updated_by')->default(null)->change();
            $table->dateTime('date1')->default(null)->change();
            $table->dateTime('date2')->default(null)->change();
            $table->text('tour_cost')->default(null)->change();
            $table->text('tour_duration')->default(null)->change();
            $table->text('tour_status')->default(null)->change();
            $table->text('itinerary_desc')->default(null)->change();
            $table->string('itinerary_map', 191)->default(null)->change();
            $table->text('schedule_tours')->default(null)->change();
            $table->text('faq')->default(null)->change();
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('janvince_smallrecords_records', function($table)
        {
            $table->integer('area_id')->default(NULL)->change();
            $table->integer('category_id')->default(NULL)->change();
            $table->text('description')->default('NULL')->change();
            $table->text('content')->default('NULL')->change();
            $table->string('url', 191)->default('NULL')->change();
            $table->dateTime('date')->default('NULL')->change();
            $table->boolean('active')->default(NULL)->change();
            $table->boolean('favourite')->default(NULL)->change();
            $table->text('repeater')->default('NULL')->change();
            $table->text('testimonials')->default('NULL')->change();
            $table->string('preview_image_media', 191)->default('NULL')->change();
            $table->integer('sort_order')->default(NULL)->change();
            $table->text('images_media')->default('NULL')->change();
            $table->text('content_blocks')->default('NULL')->change();
            $table->text('custom_repeater')->default('NULL')->change();
            $table->integer('created_by')->default(NULL)->change();
            $table->integer('updated_by')->default(NULL)->change();
            $table->dateTime('date1')->default('NULL')->change();
            $table->dateTime('date2')->default('NULL')->change();
            $table->text('tour_cost')->default('NULL')->change();
            $table->text('tour_duration')->default('NULL')->change();
            $table->text('tour_status')->default('NULL')->change();
            $table->text('itinerary_desc')->default('NULL')->change();
            $table->string('itinerary_map', 191)->default('NULL')->change();
            $table->text('schedule_tours')->default('NULL')->change();
            $table->text('faq')->default('NULL')->change();
            $table->timestamp('created_at')->nullable()->default('NULL');
            $table->timestamp('updated_at')->nullable()->default('NULL');
        });
    }
}
