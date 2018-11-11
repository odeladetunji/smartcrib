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

class UpdateAgentRecordsController extends BaseController
{
    public function updatingUniqueIdentities($emptySpace, $theRandomNumber){
            $emptySpace = " ";
            $uniqueIdentities = Storage::get('uniqueIdentity.json');
            $updatedValue = $uniqueIdentities . $emptySpace . $theRandomNumber;
            Storage::put('uniqueIdentity.json', $updatedValue);
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


    public function updateAgentRecords(Request $request){
        $rand = $this->randomStringGenerator();
        $picture_name = $rand . $request->picture->getClientOriginalName();
        
        if($request->input('contactForm')){
           DB::insert('insert into contacts (firstname, lastname, telephone, email, status, type) values (?, ?, ?, ?, ?, ?)', [$request->input('firstname'), $request->input('lastname'), $request->input('telephone'), $request->input('email'), $request->input('status'), $request->input('type'),]);
           return response()->json(array('data' => true));
        }

        DB::update('update agents set first_name = ?, lastname = ?, telephone = ?, office_address = ?, home_address = ?, state = ?, local_government = ?, picture = ? where email = ?', [$request->input('firstname'), $request->input('lastname'), $request->input('office_phone'), $request->input('office_address'), $request->input('home_address'), $request->input('state'), $request->input('localgovernment'), $picture_name, $request->input('email')]);

        Storage::putFileAs('/public/images', new File($request->picture), $picture_name);
       
        return response()->json(array('data' => true));
    }
}


