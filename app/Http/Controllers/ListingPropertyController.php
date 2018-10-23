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

        $email = $request->input('email');
        DB::insert('insert into properties (email) values (?)', [$email]);
        DB::update('update properties set identity = ? where email = ?', [$theRandomNumber, $email]);

        
        // Property Table!
        if ($request->filled('category')) {
            DB::update('update properties set category = ? where email = ?', [$request->input('category'), $email]);
        }

        if ($request->filled('title')) {
            DB::insert('update properties set title = ? where email = ?', [$request->input('title'), $email]);
        }
        if ($request->filled('size')) {
            DB::insert('update properties set size = ? where email = ?', [$request->input('size'), $email]);
        }
        if ($request->filled('measure')) {
            DB::insert('update properties set measure = ? where email = ?', [$request->input('measure'), $email]);
        }
        if ($request->filled('Federal C of O')) {
            DB::insert('update properties set fed_c_of_o = ? where email = ?', [$request->input('Federal C of O '), $email]);
        }
        if ($request->filled('State C of O')) {
            DB::insert('update properties set state_c_of_o = ? where email = ?', [$request->input('State C of O'), $email]);
        }
        if ($request->filled('Gazette')) {
            DB::insert('update properties set gazette = ? where email = ?', [$request->input('Gazette'), $email]);
        }
        if ($request->filled('Survey Plan')) {
            DB::insert('update properties set survey_plan = ? where email = ?', [$request->input('Survey Plan'), $email]);

        if ($request->filled('Family Receipt')) {
            DB::insert('update properties set family_reciept = ? where email = ?', [$request->input('Family Receipt'), $email]);
        }
        if ($request->filled('Registered Survey Plan')) {
            DB::insert('update properties set registered_survey_plan = ? where email = ?', [$request->input('Registered Survey Plan'), $email]);
        }
        if ($request->filled('Registered Deed of Conveyance')) {
            DB::insert('update properties set registered_deed_of_conveyance = ? where email = ?', [$request->input('Registered Deed of Conveyance'), $email]);
        }
        if ($request->filled('Registered Deed of Assignment')) {
            DB::insert('update properties set registered_deed_of_assignment = ? where email = ?', [$request->input('Registered Deed of Assignment'), $email]);
        }
        if ($request->filled('Deed of Assignment')) {
            DB::insert('update properties set deed_of_assignment = ? where email = ?', [$request->input('Deed of Assignment'), $email]);
        }
        if ($request->filled('Deed of Conveyance')) {
            DB::insert('update properties set deed_of_conveyance = ? where email = ?', [$request->input('Deed of Conveyance'), $email]);
        }
        if ($request->filled('Governors Consent Letter')) {
            DB::insert('update properties set governors_consent_letter = ? where email = ?', [$request->input('Governors Consent Letter'), $email]);
        }
        if ($request->filled('Approved Building Plan')) {
            DB::insert('update properties set approved_building_plan = ? where email = ?', [$request->input('Approved Building Plan'), $email]);
        }


        // Facilities
        if ($request->filled('Newly Built')) {
            DB::insert('update facilities set newly_built = ? where email = ?', [$request->input('Newly Built'), $email]);
        }
        if($request->filled('Newly Renovated')) {
            DB::insert('update facilities set newly_renovated = ? where email = ?', [$request->input('New Renovated'), $email]);
        }
        if($request->filled('POP')) {
            DB::insert('update facilities set pop = ? where email = ?', [$request->input('POP'), $email]);
        }
        if($request->filled('Dilapidated')) {
            DB::insert('update facilities set dilapidated = ? where email = ?', [$request->input('Dilapidated'), $email]);
        }
        if($request->filled('Fenced')) {
            DB::insert('update facilities set fenced = ? where email = ?', [$request->input('Fenced'), $email]);
        }
        if($request->filled('Well Water')) {
            DB::insert('update facilities set well_water = ? where email = ?', [$request->input('Well Water'), $email]);
        }
        if($request->filled('Borehole')) {
            DB::insert('update facilities set borehole = ? where email = ?', [$request->input('Borehole'), $email]);
        }
        if($request->filled('Gated Estate')) {
            DB::insert('update facilities set gated_estate = ? where email = ?', [$request->input('Gated Estate'), $email]);
        }
        if($request->filled('Security')) {
            DB::insert('insert into facilities set security = ? where email = ?', [$request->input('Security'), $email]);
        }
        if($request->filled('Water Treatment Plant')) {
            DB::insert('update facilities set water_treatment_plant = ? where email = ?', [$request->input('Water Treatment Plant'), $email]);
        }
        if($request->filled('All Room Ensuite')) {
            DB::insert('update facilities set all_room_ensuite = ? where email = ?', [$request->input('All Room Ensuite'), $email]);
        }
        if($request->filled('Ample parking Space')) {
            DB::insert('update facilities set ample_parking_space = ? where email = ?', [$request->input('Ample parking Space'), $email]);
        }
        if($request->filled('All others not Listed')) {
            DB::insert('update facilities set all_others_not_listed = ? where email = ?', [$request->input('All others not Listed'), $email]);
        }



        //Quantity Section
        DB::insert('insert into quantity (identity) value (?)', [$theRandomNumber]);
        DB::update('update quantity set email = ? where identity = ?', [$email, $theRandomNumber]);

        if($request->filled('price')) {
            DB::insert('update quantity set price = ? where email = ?', [$request->input('price'), $email]);
        }
        if($request->filled('units')) {
            DB::insert('update quantity set units = ? where email = ?', [$request->input('units'), $email]);
        }
        if($request->filled('bedroom')) {
            DB::insert('update quantity set bedroom = ? where email = ?', [$request->input('bedroom'), $email]);
        }

        if($request->filled('state')) {
            DB::insert('update quantity set state_property_is_located = ? where email = ?', [$request->input('state'), $email]);
        }

        if($request->filled('telephone')) {
            DB::insert('update quantity set telephone = ? where email = ?', [$request->input('telephone'), $email]);
        }

        if($request->filled('owners name')) {
            DB::insert('update quantity set owners_name = ? where email = ?', [$request->input('owners name'), $email]);
        }

        if($request->filled('address')) {
            DB::insert('update quantity set address = ? where email = ?', [$request->input('address'), $email]);
        }

        if ($request->filled('short note')) {
            DB::insert('update quantity set short_note = ? where email = ?', [$request->input('short note'), $email]);
        }


        //Pictures of Properties!!!
        if ($request->filled('cover picture')) {

            $nameOfCoverPicture = $request->input('cover picture')->getClientOriginalName();

            $newIdentity = $this->randomStringGenerator();

            DB::insert('insert into pictures_of_properties (cover_picture) values (?) ', [$newIdentity . $nameOfCoverPicture]);

            Storage::putFileAs('/public/images', new File($photo), $newIdentity . $nameOfCoverPicture);

            DB::table('pictures_of_properties')
                         ->where('cover_picture', $newIdentity . $nameOfCoverPicture)
                             ->update(['email' => $email]);

        }

        if ($request->filled('other pictures')) {
            $pictures = $request->input('other pictures');
            $counter = 0;
            
            foreach ($pictures as $photo) {
                $counter++;
                $param = "otherpicture" . $counter;
   
                $name = $photo->getClientOriginalName();

                $anIdentity = $this->randomStringGenerator();
            
                Storage::putFileAs('/public/images', new File($photo), $anIdentity . $name);

                DB::table('pictures_of_properties')
                         ->where('email', $email)
                             ->update([$param => $anIdentity .$name]);

                if ($counter == 20) {
                    break;
                }
            }

        }

        return response()->json(array('data' => $email));

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


