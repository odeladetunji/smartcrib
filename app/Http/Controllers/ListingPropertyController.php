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

class ListingPropertyController extends BaseController
{
    /*public function insertToDatabase($username, $password, (String)$theRandomNumber){
                // student table
                DB::insert('insert into studentregistration (username, password, identity) values (?, ?, ?)', [$username, $password, (String)$theRandomNumber]);
    }*/

    public function updatingUniqueIdentities($emptySpace, $theRandomNumber){
                $emptySpace = " ";
                $uniqueIdentities = Storage::get('uniqueIdentity.json');
                $updatedValue = $uniqueIdentities . $emptySpace . $theRandomNumber;
                Storage::put('uniqueIdentity.json', $updatedValue);
               // $this->insertToDatabase($username, $password, (String)$theRandomNumber);
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

    public function list(Request $request){
        // give the property a  unique identity
        $theRandomNumber = $this->randomStringGenerator();
        //return response()->json(array('data' => (String)$theRandomNumber));
        $email = $request->input('email');
        DB::insert('insert into properties (identity , email) values (?, ?)', [(String)$theRandomNumber, $email]);
        
        
        // Property Table!
        if ($request->filled('category')) {
            DB::update('update properties set category = ? where identity = ?', [$request->input('category'), (String)$theRandomNumber]);
        }

        if ($request->filled('title')) {
            DB::update('update properties set title = ? where identity = ?', [$request->input('title'), (String)$theRandomNumber]);
        }
        if ($request->filled('size')) {
            DB::update('update properties set size = ? where identity = ?', [$request->input('size'), (String)$theRandomNumber]);
        }
        if ($request->filled('measure')) {
            DB::update('update properties set measure = ? where identity = ?', [$request->input('measure'), (String)$theRandomNumber]);
        }
        if ($request->filled('Federal-C-of-O')) {
            DB::update('update properties set fed_c_of_o = ? where identity = ?', [$request->input('Federal-C-of-O'), (String)$theRandomNumber]);
        }
        if ($request->filled('State-C-of-O')) {
            DB::update('update properties set state_c_of_o = ? where identity = ?', [$request->input('State-C-of-O'), (String)$theRandomNumber]);
        }
        if ($request->filled('Gazette')) {
            DB::insert('update properties set gazette = ? where identity = ?', [$request->input('Gazette'), (String)$theRandomNumber]);
        }
        if ($request->filled('Survey-Plan')) {
            DB::update('update properties set survey_plan = ? where identity = ?', [$request->input('Survey-Plan'), (String)$theRandomNumber]);
        }
        if ($request->filled('Family-Receipt')) {
            DB::update('update properties set family_reciept = ? where identity = ?', [$request->input('Family-Receipt'), (String)$theRandomNumber]);
        }
        if ($request->filled('Registered-Survey-Plan')) {
            DB::update('update properties set registered_survey_plan = ? where identity = ?', [$request->input('Registered-Survey-Plan'), (String)$theRandomNumber]);
        }
        if ($request->filled('Registered-Deed-of-Conveyance')) {
            DB::update('update properties set registered_deed_of_conveyance = ? where identity = ?', [$request->input('Registered-Deed-of-Conveyance'), (String)$theRandomNumber]);
        }
        if ($request->filled('Registered-Deed-of-Assignment')) {
            DB::update('update properties set registered_deed_of_assignment = ? where identity = ?', [$request->input('Registered-Deed-of-Assignment'), (String)$theRandomNumber]);
        }
        if ($request->filled('Deed-of-Assignment')) {
            DB::update('update properties set deed_of_assignment = ? where identity = ?', [$request->input('Deed-of-Assignment'), (String)$theRandomNumber]);
        }
        if ($request->filled('Deed-of-Conveyance')) {
            DB::update('update properties set deed_of_conveyance = ? where identity = ?', [$request->input('Deed-of-Conveyance'), (String)$theRandomNumber]);
        }
        if ($request->filled('Governors-Consent-Letter')) {
            DB::update('update properties set governors_consent_letter = ? where identity = ?', [$request->input('Governors-Consent-Letter'), (String)$theRandomNumber]);
        }
        if ($request->filled('Approved-Building-Plan')) {
            DB::update('update properties set approved_building_plan = ? where identity = ?', [$request->input('Approved-Building-Plan'), (String)$theRandomNumber]);
        }
        if ($request->filled('longitude')) {
            DB::update('update properties set longitude = ? where identity = ?', [$request->input('longitude'), (String)$theRandomNumber]);
        }
        if ($request->filled('latitude')) {
            DB::update('update properties set latitude = ? where identity = ?', [$request->input('latitude'), (String)$theRandomNumber]);
        }
        if ($request->filled('propIdentity')) {
            DB::update('update properties set propidentity = ? where identity = ?', [$request->input('propIdentity'), (String)$theRandomNumber]);
        }
  
        //return response()->json(array('data' => (String)$theRandomNumber));

        // Facilities
        DB::insert('insert into Facilities (identity, email) values (?, ?)', [(String)$theRandomNumber, $request->input('email')]);
        // DB::table('Facilities')
        //                  ->where('identity', (String)$theRandomNumber)
        //                      ->update(['email' => $email]);


        if ($request->filled('Newly-Built')) {
            DB::update('update Facilities set newly_built = ? where identity = ?', [$request->input('Newly-Built'), (String)$theRandomNumber]);
        }
        if($request->filled('Newly-Renovated')) {
            DB::update('update Facilities set newly_renovated = ? where identity = ?', [$request->input('Newly-Renovated'), (String)$theRandomNumber]);
        }
        if($request->filled('POP')) {
            DB::update('update Facilities set pop = ? where identity = ?', [$request->input('POP'), (String)$theRandomNumber]);
        }
        if($request->filled('Dilapidated')) {
            DB::update('update Facilities set dilapidated = ? where identity = ?', [$request->input('Dilapidated'), (String)$theRandomNumber]);
        }
        if($request->filled('Fenced')) {
            DB::update('update Facilities set fenced = ? where identity = ?', [$request->input('Fenced'), (String)$theRandomNumber]);
        }
        if($request->filled('Well-Water')) {
            DB::update('update Facilities set well_water = ? where identity = ?', [$request->input('Well-Water'), (String)$theRandomNumber]);
        }
        if($request->filled('Borehole')) {
            DB::update('update Facilities set borehole = ? where identity = ?', [$request->input('Borehole'), (String)$theRandomNumber]);
        }
        if($request->filled('Gated-Estate')) {
            DB::update('update Facilities set gated_estate = ? where identity = ?', [$request->input('Gated-Estate'), (String)$theRandomNumber]);
        }
        if($request->filled('Security')) {
            DB::update('update Facilities set security = ? where identity = ?', [$request->input('Security'), (String)$theRandomNumber]);
        }
        if($request->filled('Water-Treatment-Plant')) {
            DB::update('update Facilities set water_treatment_plant = ? where identity = ?', [$request->input('Water-Treatment-Plant'), (String)$theRandomNumber]);
        }
        if($request->filled('All-Room-Ensuite')) {
            DB::update('update Facilities set all_room_ensuit = ? where identity = ?', [$request->input('All-Room-Ensuite'), (String)$theRandomNumber]);
        }
        if($request->filled('Ample-parking-Space')) {
            DB::update('update Facilities set ample_parking_space = ? where identity = ?', [$request->input('Ample-parking-Space'), (String)$theRandomNumber]);
        }
        if($request->filled('All-others-not-Listed')) {
            DB::update('update Facilities set all_others_not_listed = ? where identity = ?', [$request->input('All-others-not-Listed'), (String)$theRandomNumber]);
        }


        //Quantity Section
        DB::insert('insert into quantity (identity) value (?)', [(String)$theRandomNumber]);
        DB::update('update quantity set email = ? where identity = ?', [ $request->input('email'), (String)$theRandomNumber]);

        if($request->filled('price')) {
            DB::update('update quantity set price = ? where identity = ?', [$request->input('price'), (String)$theRandomNumber]);
        }
        if($request->filled('units')) {
            DB::update('update quantity set units = ? where identity = ?', [$request->input('units'), (String)$theRandomNumber]);
        }
        if($request->filled('bedroom')) {
            DB::update('update quantity set bedroom = ? where identity = ?', [$request->input('bedroom'), (String)$theRandomNumber]);
        }

        if($request->filled('state')) {
            DB::update('update quantity set state_property_is_located = ? where identity = ?', [$request->input('state'), (String)$theRandomNumber]);
        }

        if($request->filled('local-government')) {
            DB::update('update quantity set local_government = ? where identity = ?', [$request->input('local-government'), (String)$theRandomNumber]);
        }

        if($request->filled('telephone')) {
            DB::update('update quantity set telephone = ? where identity = ?', [$request->input('telephone'), (String)$theRandomNumber]);
        }

        if($request->filled('owners-name')) {
            DB::update('update quantity set owners_name = ? where identity = ?', [$request->input('owners-name'), (String)$theRandomNumber]);
        }

        if($request->filled('address')) {
            DB::update('update quantity set address = ? where identity = ?', [$request->input('address'), (String)$theRandomNumber]);
        }

        if ($request->filled('short-note')) {
            DB::update('update quantity set short_note = ? where identity = ?', [$request->input('short-note'), (String)$theRandomNumber]);
        }


        //Pictures of Properties!!!
        if ($request->coverpicture) {
        
            $nameOfCoverPicture = $request->coverpicture->getClientOriginalName();
            
            $newIdentity = $this->randomStringGenerator();

            DB::insert('insert into pictures_of_properties (cover_picture, email) values (?, ?) ', [$newIdentity . $nameOfCoverPicture,  $request->input('email')]);


            Storage::putFileAs('/public/images', new File($request->coverpicture), $newIdentity . $nameOfCoverPicture);

            DB::table('pictures_of_properties')
                         ->where('cover_picture', $newIdentity . $nameOfCoverPicture)
                             ->update(['email' =>  $request->input('email')]);

            DB::table('pictures_of_properties')
                         ->where('email',  $request->input('email'))
                             ->update(['identity' => (String)$theRandomNumber]);

        }

        if ($request->otherpictures) {
            $pictures = $request->otherpictures;
            $counter = 0;
            //return response()->json(array('data' => $pictures));

            foreach ($pictures as $photo) {
                $counter++;
                $aString = "otherpicture";
                $param = $aString . $counter;

                $name = $photo->getClientOriginalName();
                
                $anIdentity = $this->randomStringGenerator();
            
                Storage::putFileAs('/public/images', new File($photo), $anIdentity . $name);

                DB::table('pictures_of_properties')
                         ->where('email',  $request->input('email'))
                             ->update([$param => $anIdentity .$name]);

                if ($counter == 24) {
                    break;
                }
            }

        }

        return response()->json(array('data' => true));

       /* if (sizeof($data) == 0) {
            return response()->json(array('data' => false));
        }

        if (sizeof($data) != 0) {
             if ($data[0]->email != (String)$theRandomNumber && $data[0]->password != $password) {
                 return response()->json(array('data' => 'Wrong Username or Password'));
             }

            return response()->json(array('data' => true));
        }
        //return;*/
    }
}


