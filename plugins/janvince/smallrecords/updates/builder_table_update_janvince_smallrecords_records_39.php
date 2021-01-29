<?php namespace JanVince\SmallRecords\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJanvinceSmallrecordsRecords39 extends Migration
{
    public function up()
    {
        Schema::table('janvince_smallrecords_records', function($table)
        {
            $table->integer('area_id')->nullable()->change();
            $table->integer('category_id')->default(null)->change();
            $table->text('description')->nullable()->change();
            $table->text('content')->nullable()->change();
            $table->string('url', 191)->nullable()->change();
            $table->dateTime('date')->default(null)->change();
            $table->boolean('active')->nullable()->change();
            $table->boolean('favourite')->nullable()->change();
            $table->text('repeater')->nullable()->change();
            $table->text('testimonials')->nullable()->change();
            $table->string('preview_image_media', 191)->nullable()->change();
            $table->integer('sort_order')->nullable()->change();
            $table->text('images_media')->nullable()->change();
            $table->text('content_blocks')->nullable()->change();
            $table->text('custom_repeater')->nullable()->change();
            $table->integer('created_by')->nullable()->change();
            $table->integer('updated_by')->nullable()->change();
            $table->dateTime('date1')->default(null)->change();
            $table->dateTime('date2')->default(null)->change();
            $table->text('tour_cost')->nullable()->change();
            $table->text('tour_duration')->nullable()->change();
            $table->text('tour_status')->nullable()->change();
            $table->text('itinerary_desc')->nullable()->change();
            $table->text('sights_editor')->nullable()->change();
            $table->text('sights_map')->nullable()->change();
            $table->string('itinerary_map', 191)->nullable()->change();
            $table->text('schedule_tours')->nullable()->change();
            $table->text('faq')->nullable()->change();
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('janvince_smallrecords_records', function($table)
        {
            $table->integer('area_id')->nullable(false)->change();
            $table->integer('category_id')->default(NULL)->change();
            $table->text('description')->nullable(false)->change();
            $table->text('content')->nullable(false)->change();
            $table->string('url', 191)->nullable(false)->change();
            $table->dateTime('date')->default('NULL')->change();
            $table->boolean('active')->nullable(false)->change();
            $table->boolean('favourite')->nullable(false)->change();
            $table->text('repeater')->nullable(false)->change();
            $table->text('testimonials')->nullable(false)->change();
            $table->string('preview_image_media', 191)->nullable(false)->change();
            $table->integer('sort_order')->nullable(false)->change();
            $table->text('images_media')->nullable(false)->change();
            $table->text('content_blocks')->nullable(false)->change();
            $table->text('custom_repeater')->nullable(false)->change();
            $table->integer('created_by')->nullable(false)->change();
            $table->integer('updated_by')->nullable(false)->change();
            $table->dateTime('date1')->default('NULL')->change();
            $table->dateTime('date2')->default('NULL')->change();
            $table->text('tour_cost')->nullable(false)->change();
            $table->text('tour_duration')->nullable(false)->change();
            $table->text('tour_status')->nullable(false)->change();
            $table->text('itinerary_desc')->nullable(false)->change();
            $table->text('sights_editor')->nullable(false)->change();
            $table->text('sights_map')->nullable(false)->change();
            $table->string('itinerary_map', 191)->nullable(false)->change();
            $table->text('schedule_tours')->nullable(false)->change();
            $table->text('faq')->nullable(false)->change();
            $table->timestamp('created_at')->nullable()->default('NULL');
            $table->timestamp('updated_at')->nullable()->default('NULL');
        });
    }
}
