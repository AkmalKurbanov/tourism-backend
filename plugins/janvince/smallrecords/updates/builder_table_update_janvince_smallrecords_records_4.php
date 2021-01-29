<?php namespace JanVince\SmallRecords\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJanvinceSmallrecordsRecords4 extends Migration
{
    public function up()
    {
        Schema::table('janvince_smallrecords_records', function($table)
        {
            $table->integer('category_id')->nullable(false)->default(null)->change();
            $table->string('name', 191)->nullable(false)->default(null)->change();
            $table->string('slug', 191)->nullable(false)->default(null)->change();
            $table->text('description')->nullable(false)->default(null)->change();
            $table->text('content')->nullable(false)->default(null)->change();
            $table->string('url', 191)->nullable(false)->default(null)->change();
            $table->dateTime('date')->nullable(false)->default(null)->change();
            $table->boolean('active')->nullable(false)->default(null)->change();
            $table->boolean('favourite')->nullable(false)->default(null)->change();
            $table->text('repeater')->nullable(false)->default(null)->change();
            $table->text('testimonials')->nullable(false)->default(null)->change();
            $table->string('preview_image_media', 191)->nullable(false)->default(null)->change();
            $table->integer('sort_order')->nullable(false)->default(null)->change();
            $table->text('images_media')->nullable(false)->default(null)->change();
            $table->text('images')->nullable(false)->default(null)->change();
            $table->text('content_blocks')->nullable(false)->default(null)->change();
            $table->text('custom_repeater')->nullable(false)->default(null)->change();
            $table->integer('created_by')->nullable(false)->default(null)->change();
            $table->integer('updated_by')->nullable(false)->default(null)->change();
            $table->dateTime('date1')->nullable(false)->default(null)->change();
            $table->dateTime('date2')->nullable(false)->default(null)->change();
            $table->dateTime('schedule_tours')->nullable(false)->default(null)->change();
            $table->dateTime('faq')->nullable(false)->default(null)->change();
            $table->dateTime('tour_cost')->nullable(false)->default(null)->change();
            $table->dateTime('tour_duration')->nullable(false)->default(null)->change();
            $table->dateTime('tour_status')->nullable(false)->default(null)->change();
            $table->dateTime('itinerary_desc')->nullable(false)->default(null)->change();
            $table->dateTime('sights_editor')->nullable(false)->default(null)->change();
            $table->dateTime('sights_map')->nullable(false)->default(null)->change();
            $table->dateTime('itinerary_map')->nullable(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('janvince_smallrecords_records', function($table)
        {
            $table->integer('category_id')->nullable()->default(NULL)->change();
            $table->string('name', 191)->nullable()->default('NULL')->change();
            $table->string('slug', 191)->nullable()->default('NULL')->change();
            $table->text('description')->nullable()->default('NULL')->change();
            $table->text('content')->nullable()->default('NULL')->change();
            $table->string('url', 191)->nullable()->default('NULL')->change();
            $table->dateTime('date')->nullable()->default('NULL')->change();
            $table->boolean('active')->nullable()->default(NULL)->change();
            $table->boolean('favourite')->nullable()->default(NULL)->change();
            $table->text('repeater')->nullable()->default('NULL')->change();
            $table->text('testimonials')->nullable()->default('NULL')->change();
            $table->string('preview_image_media', 191)->nullable()->default('NULL')->change();
            $table->integer('sort_order')->nullable()->default(NULL)->change();
            $table->text('images_media')->nullable()->default('NULL')->change();
            $table->text('images')->nullable()->default('NULL')->change();
            $table->text('content_blocks')->nullable()->default('NULL')->change();
            $table->text('custom_repeater')->nullable()->default('NULL')->change();
            $table->integer('created_by')->nullable()->default(NULL)->change();
            $table->integer('updated_by')->nullable()->default(NULL)->change();
            $table->dateTime('schedule_tours')->nullable()->default('NULL')->change();
            $table->dateTime('faq')->nullable()->default('NULL')->change();
            $table->dateTime('tour_cost')->nullable()->default('NULL')->change();
            $table->dateTime('tour_duration')->nullable()->default('NULL')->change();
            $table->dateTime('tour_status')->nullable()->default('NULL')->change();
            $table->dateTime('itinerary_desc')->nullable()->default('NULL')->change();
            $table->dateTime('sights_editor')->nullable()->default('NULL')->change();
            $table->dateTime('sights_map')->nullable()->default('NULL')->change();
            $table->dateTime('itinerary_map')->nullable()->default('NULL')->change();
        });
    }
}
