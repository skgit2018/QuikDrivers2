<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQdmDriverTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qdm_driver', function (Blueprint $table) {
            $table->integer('Driver_id');//primary key
            $table->smallint(10)('mobile_no');
            $table->varchar(128)('first_name');
            $table->varchar(128)('last_name');
            $table->date('birth_date');
            $table->smallint(10)('mobile_no2');
            $table->date('License_expiry_date');
            $table->tinyint(1)('Active');
            $table->tinyint(1)('Deleted');
            $table->date('Created_on');
            $table->timestamp('Created_time');
            $table->varchar(12)('Changed_by');
            $table->char(20)('Lang1');
            $table->char(20)('Lang2');
            $table->char(20)('Lang3');
            $table->decimal(10,2)('Hourly_Rate');
            $table->decimal(10,2)('Monthly_Rate');
            $table->char(150)('Address');
            $table->char(50)('Location');
            $table->char(30)('City');
            $table->char(30)('State');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qdm_driver');
    }
}
