<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->string('title', 255);
            $table->string('content', 255);
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('category_name', 255);            
        });

        Schema::create('news_status', function (Blueprint $table) {
            $table->id();
            $table->set('current_state', ['Writing', 'Published', 'Deleted']);
        });

        Schema::create('sourses', function (Blueprint $table) {
            $table->id();
            $table->string('sourse_name', 255);
        });

        \DB::statement(
            'INSERT INTO news VALUES 
                (1, 1, Some, qwertyuiop),
                (2, 2, Some2, asdfghjkl),
                (3, 1, Some3, zxcvbnm)'
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tables');
    }
}
