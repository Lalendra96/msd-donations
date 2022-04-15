<?php

namespace App\Http\Controllers\Donations;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

use App\Models\DonationInformation;

class DonationsController extends Controller
{
    //

    public function insertData(Request $request){

        $donarName = $request->donar_name;
        $donationAmount = $request->donar_amount;
        $donarCountry = $request->donar_country;
        $donarContact = $request->donar_contact;
        $donarEmail = $request->donar_email;
        $currency = $request->currency;
        $dateInserted = date("Y-m-d H:i:s");

        

        $insertDataDonationData = array(
            "donarName" =>$donarName,
            "amount" => $donationAmount,
            "country" => $donarCountry,
            "contactNumber" => $donarContact,
            "emailAddress" => $donarEmail,
            "created_at" => $dateInserted
        );

        DB::beginTransaction();

        try{

            $donar_id = DonationInformation::insertGetId($insertDataDonationData);
            $donarInfo = DonationInformation::find($donar_id);

        }catch(QueryException $ex){

            DB::rollBack();

            return response()->json([
                'success' => false,
                'message' => $ex->getMessage()
            ],200);
        }

        if(!empty($donar_id)){
            
            DB::commit();

            try{
                $to_name = $request->donar_name;
                $to_email = $request->donar_email;

                $data = array("name"=>$to_name, "body" => $currency." ".$donationAmount);

                Mail::send("emails.mail", $data, function($message) use ($to_name, $to_email) {

                    $message->to($to_email, $to_name)

                    ->subject("Donation Successful");

                    $message->from("lalendradias3@gmail.com","Test Mail");

                });

                return response()->json([
                    'success' => true,
                    'message' => "Successfully Placed Your Donation"
                ],200);

            }catch(\Exception $ex){

                return response()->json([
                    'success' => false,
                    'message' => "Failed to Send the Reply Email"
                ],200);

            }

        }else{

            DB::rollBack();

            return response()->json([
                'success' => false,
                'message' => $ex->getMessage()
            ],200);
        }
        
    }
}
