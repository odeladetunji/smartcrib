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

class SignupController extends BaseController
{
    public function create_user($email, $password, $theRandomNumber){
         DB::insert('insert into registration (email, password, identity) values (?, ?, ?)', [$email, $password, $theRandomNumber]);
    }

    public function updatingUniqueIdentities($emptySpace, $theRandomNumber){
                $emptySpace = " ";
                $uniqueIdentities = Storage::get('uniqueIdentity.json');
                $updatedValue = $uniqueIdentities . $emptySpace . $theRandomNumber;
                Storage::put('uniqueIdentity.json', $updatedValue);
    }


    public function randomStringGenerator($email, $password){
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
           $this->create_user($email, $password, $theRandomNumber);
           return $theRandomNumber;
        }else{
              $this->randomStringGenerator();  // recursive function call
        }
    }

    public function signup(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        $data = DB::select('select email from registration where email = ?', [$email]);

        if (sizeof($data) == 0) {
            $this->randomStringGenerator($email, $password);
            return response()->json(array('data' => true));
        }

        if (sizeof($data) != 0) {
            return response()->json(array('data' => false));
        }
        //return;
    }
}


