<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//use App\Mobile;

class MobileController extends Controller {

    public function mobileno(Request $request) {


        $mobileNumber = $request->input('mobile_no');

        if ($mobileNumber != '') {
            $getData = \App\Mobile::select('mobile_no')
                    ->get();

            $count = count($getData);

            if ($count == '') {

                return redirect('/clint')->with('MobileNumber', $mobileNumber);
            } else {

                $otp = $this->generateRandomOtp();
                $insertData = \App\Mobile::insertGetId();
                
                
            }
        }

        /* $driver = new Mobile;
          $driver->reg_user_id = $request->input('reg_user_id');
          $driver->mobile_no = $request->input('mobile_no');
          $driver->reg_user_status = 1;

          $driver = save();


          return redirect('/clint'); */
    }

    public static function generateRandomOtp($length = 4) {

        $characters = '0123456789';
        $string = '';

        for ($i = 0; $i < $length; $i++) {
            $string .= $characters[mt_rand(0, strlen($characters) - 1)];
        }

        return $string;
    }

}
