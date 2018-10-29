<?php
namespace App\Http\Controllers;
use DB;
use Storage;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\UploadedFile;

class PostRequestController extends BaseController
{
    /*public function insertToDatabase($username, $password, $theRandomNumber){
                // student table
                DB::insert('insert into studentregistration (username, password, identity) values (?, ?, ?)', [$username, $password, $theRandomNumber]);
    }*/

    public function updatingUniqueIdentities($emptySpace, $theRandomNumber){
                $emptySpace = " ";
                $uniqueIdentities = Storage::get('uniqueIdentity.json');
                $updatedValue = $uniqueIdentities . $emptySpace . $theRandomNumber;
                Storage::put('uniqueIdentity.json', $updatedValue);
               // $this->insertToDatabase($username, $password, $theRandomNumber);
    }

    public function randomStringGenerator(){
                $theRandomNumber;
                $emptySpace = " ";
                $randomNumber = mt_rand(10, 1000000);
                $formerData = Storage::get('uniqueIdentity.json');
                //$testData = "testData";
               // print_r($testData);
                $checkingValue = strpos($formerData, $randomNumber);

                if($checkingValue == false ){
                   $theRandomNumber = $randomNumber;
                   $this->updatingUniqueIdentities($emptySpace, $theRandomNumber);
                   return $theRandomNumber;
                }else{
                      $this->randomStringGenerator();  // recursive function call
                }
    }

    public function myrequest(Request $request){
        // give the property a  unique identity
        $theRandomNumber = $this->randomStringGenerator();
        //return response()->json(array('data' => $theRandomNumber));
        $email = $request->input('email');
        DB::insert('insert into request_properties (email) values (?)', [$email]);
        DB::update('update request_properties set identity = ? where email = ?', [$theRandomNumber, $email]);
        //return response()->json(array('data' => $email));
        
        // Property Table!
        if ($request->filled('category')) {
            DB::update('update request_properties set category = ? where email = ?', [$request->input('category'), $email]);
        }

        if ($request->filled('title')) {
            DB::update('update request_properties set title = ? where email = ?', [$request->input('title'), $email]);
        }
        if ($request->filled('size')) {
            DB::update('update request_properties set size = ? where email = ?', [$request->input('size'), $email]);
        }
        if ($request->filled('measure')) {
            DB::update('update request_properties set measure = ? where email = ?', [$request->input('measure'), $email]);
        }
        if ($request->filled('Federal-C-of-O')) {
            DB::update('update request_properties set fed_c_of_o = ? where email = ?', [$request->input('Federal-C-of-O'), $email]);
        }
        if ($request->filled('State-C-of-O')) {
            DB::update('update request_properties set state_c_of_o = ? where email = ?', [$request->input('State-C-of-O'), $email]);
        }
        if ($request->filled('Gazette')) {
            DB::insert('update request_properties set gazette = ? where email = ?', [$request->input('Gazette'), $email]);
        }
        if ($request->filled('Survey-Plan')) {
            DB::update('update request_properties set survey_plan = ? where email = ?', [$request->input('Survey-Plan'), $email]);
        }
        if ($request->filled('Family-Receipt')) {
            DB::update('update request_properties set family_reciept = ? where email = ?', [$request->input('Family-Receipt'), $email]);
        }
        if ($request->filled('Registered-Survey-Plan')) {
            DB::update('update request_properties set registered_survey_plan = ? where email = ?', [$request->input('Registered-Survey-Plan'), $email]);
        }
        if ($request->filled('Registered-Deed-of-Conveyance')) {
            DB::update('update request_properties set registered_deed_of_conveyance = ? where email = ?', [$request->input('Registered-Deed-of-Conveyance'), $email]);
        }
        if ($request->filled('Registered-Deed-of-Assignment')) {
            DB::update('update request_properties set registered_deed_of_assignment = ? where email = ?', [$request->input('Registered-Deed-of-Assignment'), $email]);
        }
        if ($request->filled('Deed-of-Assignment')) {
            DB::update('update request_properties set deed_of_assignment = ? where email = ?', [$request->input('Deed-of-Assignment'), $email]);
        }
        if ($request->filled('Deed-of-Conveyance')) {
            DB::update('update request_properties set deed_of_conveyance = ? where email = ?', [$request->input('Deed-of-Conveyance'), $email]);
        }
        if ($request->filled('Governors-Consent-Letter')) {
            DB::update('update request_properties set governors_consent_letter = ? where email = ?', [$request->input('Governors-Consent-Letter'), $email]);
        }
        if ($request->filled('Approved-Building-Plan')) {
            DB::update('update request_properties set approved_building_plan = ? where email = ?', [$request->input('Approved-Building-Plan'), $email]);
        }
  
        //return response()->json(array('data' => $email));

        // request_facilities
        DB::insert('insert into request_facilities (email) values (?)', [$email]);
        DB::table('request_facilities')
                         ->where('email', $email)
                             ->update(['identity' => $theRandomNumber]);


        if ($request->filled('Newly-Built')) {
            DB::update('update request_facilities set newly_built = ? where email = ?', [$request->input('Newly-Built'), $email]);
        }
        if($request->filled('Newly-Renovated')) {
            DB::update('update request_facilities set newly_renovated = ? where email = ?', [$request->input('Newly-Renovated'), $email]);
        }
        if($request->filled('POP')) {
            DB::update('update request_facilities set pop = ? where email = ?', [$request->input('POP'), $email]);
        }
        if($request->filled('Dilapidated')) {
            DB::update('update request_facilities set dilapidated = ? where email = ?', [$request->input('Dilapidated'), $email]);
        }
        if($request->filled('Fenced')) {
            DB::update('update request_facilities set fenced = ? where email = ?', [$request->input('Fenced'), $email]);
        }
        if($request->filled('Well-Water')) {
            DB::update('update request_facilities set well_water = ? where email = ?', [$request->input('Well-Water'), $email]);
        }
        if($request->filled('Borehole')) {
            DB::update('update request_facilities set borehole = ? where email = ?', [$request->input('Borehole'), $email]);
        }
        if($request->filled('Gated-Estate')) {
            DB::update('update request_facilities set gated_estate = ? where email = ?', [$request->input('Gated-Estate'), $email]);
        }
        if($request->filled('Security')) {
            DB::update('update request_facilities set security = ? where email = ?', [$request->input('Security'), $email]);
        }
        if($request->filled('Water-Treatment-Plant')) {
            DB::update('update request_facilities set water_treatment_plant = ? where email = ?', [$request->input('Water-Treatment-Plant'), $email]);
        }
        if($request->filled('All-Room-Ensuite')) {
            DB::update('update request_facilities set all_room_ensuit = ? where email = ?', [$request->input('All-Room-Ensuite'), $email]);
        }
        if($request->filled('Ample-parking-Space')) {
            DB::update('update request_facilities set ample_parking_space = ? where email = ?', [$request->input('Ample-parking-Space'), $email]);
        }
        if($request->filled('All-others-not-Listed')) {
            DB::update('update request_facilities set all_others_not_listed = ? where email = ?', [$request->input('All-others-not-Listed'), $email]);
        }


        //request_request_quantity Section
        DB::insert('insert into request_quantity (identity) value (?)', [$theRandomNumber]);
        DB::update('update request_quantity set email = ? where identity = ?', [$email, $theRandomNumber]);

        if($request->filled('price')) {
            DB::update('update request_quantity set price = ? where email = ?', [$request->input('price'), $email]);
        }
        if($request->filled('units')) {
            DB::update('update request_quantity set units = ? where email = ?', [$request->input('units'), $email]);
        }
        if($request->filled('bedroom')) {
            DB::update('update request_quantity set bedroom = ? where email = ?', [$request->input('bedroom'), $email]);
        }

        if($request->filled('state')) {
            DB::update('update request_quantity set state_property_is_located = ? where email = ?', [$request->input('state'), $email]);
        }

        if($request->filled('local-government')) {
            DB::update('update request_quantity set local_government = ? where email = ?', [$request->input('local-government'), $email]);
        }

        if($request->filled('telephone')) {
            DB::update('update request_quantity set telephone = ? where email = ?', [$request->input('telephone'), $email]);
        }

        if($request->filled('owners-name')) {
            DB::update('update request_quantity set owners_name = ? where email = ?', [$request->input('owners-name'), $email]);
        }p

        if($request->filled('address')) {
            DB::update('update request_quantity set address = ? where email = ?', [$request->input('address'), $email]);
        }



        
        return response()->json(array('data' => $nameOfCoverPicture));

       /* if (sizeof($data) == 0) {
            return response()->json(array('data' => false));
        }

        if (sizeof($data) != 0) {
             if ($data[0]->email != $email && $data[0]->password != $password) {
                 return response()->json(array('data' => 'Wrong Username or Password'));
             }

            return response()->json(array('data' => true));
        }
        //return;*/
    }
}


