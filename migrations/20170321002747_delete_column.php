<?php
use Uqam\Migrations\Migration;

class DeleteColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->schema->table('DummyTable3', function (Illuminate\Database\Schema\Blueprint $table) {
            //
            $table->dropColumn('serial_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $this->schema->table('DummyTable3', function (Illuminate\Database\Schema\Blueprint $table) {
            // Defaire modification
           $table->addColumn('integer','serial_number')->default(0);

        });
    }
}
