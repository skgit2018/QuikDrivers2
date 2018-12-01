<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRegDriverAgeToQdmDriversInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('qdm_drivers_info', function (Blueprint $table) {
            $table->string('reg_driver_age');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('qdm_drivers_info', function (Blueprint $table) {
            //
        });
    }
}
