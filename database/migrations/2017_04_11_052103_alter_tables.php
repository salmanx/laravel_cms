<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('category_id');
        });

        Schema::table('news', function (Blueprint $table) {
            $table->timestamp('published_at')->nullable();
        });

        Schema::table('notices', function (Blueprint $table) {
            $table->timestamp('published_at')->nullable();
        });                
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('notices', function (Blueprint $table) {
            $table->dropColumn('published_at');
        });

        Schema::table('news', function (Blueprint $table) {
            $table->dropColumn('published_at');
        });

        Schema::table('posts', function (Blueprint $table) {
            $table->integer('category_id');            
        });
    }
}
