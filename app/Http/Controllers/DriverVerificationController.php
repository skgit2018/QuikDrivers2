<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\DriverVerification;
use App\IdentityVerification;
use App\BankDetails;

class DriverVerificationController extends Controller
{

    public function DriverVerification (Request $request){
   //Create Object Model Class
   $driver = new DriverVerification;
   //$idverification = new IdentityVerification;
   //$bankdetails = new BankDetails;

   //Driver Verification Data
   $driver->Driver_id  = $request->input('Driver_id'); //Session Data
   $driver->mobile_no = $request->input('mobile_no');
   $driver->first_name =  ucwords($request->input('first_name'));
   $driver->last_name =  ucwords($request->input('last_name'));
   $driver->birth_date = $request->input('birth_date');
   $driver->mobile_no2 = $request->input('mobile_no2');
   $driver->License_expiry_date = $request->input('License_expiry_date');
   $driver->Active = $request->input('Active');
   $driver->Deleted = $request->input('Deleted');
   $driver->Created_on = $request->input('Created_on');
   $driver->reg_driver_state = $request->input('reg_driver_state');
   $driver->reg_driver_state = $request->input('reg_driver_state');
   $driver->reg_driver_pincode = $request->input('reg_driver_pincode');
   $driver->reg_driver_status = 1;

  /* //Driver Identity Verification
   $idverification->reg_user_id = $request->input('reg_user_id');

   //File Name with Extension
   $filenameWithExt = $request->file('reg_driver_image')->getClientOriginalName();

   //Get File Name
   $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

   //Get Extension
   $extension = $request->file('reg_driver_image')->getClientOriginalExtension();

   //Create New Filename
   $filenameToStore = $filename.'_'.time().'.'.$extension;

   //Upload Image
    $path = $request->file('reg_driver_image')->storeAs('public/storage/uploads', $filenameToStore);
   
   $idverification->reg_driver_image = $filenameToStore;
   $idverification->reg_driver_experience = $request->input('reg_driver_experience');
   $idverification->reg_driver_aadhar_card = $request->input('reg_driver_aadhar_card');
   $idverification->reg_driver_license = $request->input('reg_driver_license');
   $idverification->reg_driver_pancard = $request->input('reg_driver_pancard');
   $idverification->reg_driver_status = 1;*/

   //Driver Banking Details
   /*$bankdetails->reg_user_id = $request->input('reg_user_id');
   $bankdetails->reg_driver_bank_account_holder = $request->input('reg_driver_bank_account_holder');
   $bankdetails->reg_driver_bank_account_no = $request->input('reg_driver_bank_account_no');
   $bankdetails->reg_driver_bank_name = $request->input('reg_driver_bank_name');
   $bankdetails->reg_driver_bank_branch = $request->input('reg_driver_bank_branch');
   $bankdetails->reg_driver_bank_location = $request->input('reg_driver_bank_location');
   $bankdetails->reg_driver_bank_ifsc_code = $request->input('reg_driver_bank_ifsc_code');
   $bankdetails->reg_driver_status = 1;*/


  /* echo "Filename with extension :". $filenameWithExt;
   echo "<br />";
   echo "File Name :". $filename;
   echo "<br />";
   echo "Extension :". $extension;
   echo "<br />";
   echo "New Filename :". $filenameToStore;
   echo "<br />";
   echo "Path of the Image :". $path;
   echo "<br />";*/


  /* Class A extends controller {
    Public function test (Request $request){
   try{
       //Write all the code here
}
catch (Exception $e){
   echo $e->getMessage();
}
}
}*/
 

   $driver->save();
   //$idverification->save();
   //$bankdetails->save();


    return redirect('/check');

    }
}
