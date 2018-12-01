<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQdmVehicleInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qdm_vehicle_info', function (Blueprint $table) {
            $table->integer('reg_user_id');
            //$table->integer('reg_vehicle_id');
           // $table->integer('reg_driver_id ');
            $table->string('reg_vehicle_type');
            $table->string('reg_vehicle_make');
            $table->string('reg_vehicle_model');
            $table->string('reg_vehicle_No');
            $table->string('reg_vehicle_year');           
            $table->integer('reg_user_status');
        });
    }

/* changed 
             $table->string('reg_vehicle_rent_details');
            $table->string('reg_vehicle_agency_name');
            $table->text('reg_vehicle_agency_address');
            $table->string('reg_vehicle_owner_name');
            $table->string('reg_vehicle_owner_email');
            $table->string('reg_vehicle_owner_mobile');
            $table->string('reg_vehicle_owner_landline');
            $table->string('reg_vehicle_contact_name');
            $table->string('reg_vehicle_contact_email');
            $table->string('reg_vehicle_contact_mobile');
            $table->string('reg_vehicle_contact_landline');

*/



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qdm_vehicle_info');
    }
}
