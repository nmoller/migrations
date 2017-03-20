<?php

use Uqam\Migrations\Migration;

class TestMigration extends Migration
{
    public function up()
    {
        $this->schema->create('test1', function(Illuminate\Database\Schema\Blueprint $table){
            // Auto-increment id
            $table->increments('id');
            $table->integer('serial_number');
            $table->string('name');
            // Required for Eloquent's created_at and updated_at columns
            $table->timestamps();
        });
    }
    public function down()
    {
        $this->schema->drop('test1');
    }
}
