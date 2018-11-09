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

class AccountContentController extends BaseController
{
    public function getProperties($email){
         $data = DB::table('properties')
                ->join('Facilities', 'properties.identity', '=', 'Facilities.identity')
                    ->join('quantity', 'properties.identity', '=', 'quantity.identity')
                        ->join('pictures_of_properties', 'properties.identity', '=', 'pictures_of_properties.identity')
                             ->select('properties.*', 'Facilities.*', 'quantity.*', 'pictures_of_properties.*')
                                   ->where('email', $email)
                                       ->get();
         return $data; 
    }

    public function mails($email){
         $data = DB::select('select * from mails where reciever = ?', [$email]);      
         return $data; 
    }

    public function contacts($email){
         $data = DB::select('select * from contacts where email = ?', [$email]);      
         return $data; 
    }

    public function profile($email){
         $data = DB::select('select * from agents where email = ?', [$email]);      
         return $data; 
    }

    public function accountContent(Request $request){
        if ($request->input('contacts')){
             $contacts = $this->contacts($request->input('email'));
             return response()->json(array('contacts' => $contacts));
        }

        if ($request->input('props')) {
            $props = $this->getProperties($request->input('email'));
             return response()->json(array('props' => $props));
        }

        if ($request->input('profile')) {
            $profile = $this->profile($request->input('email'));
             return response()->json(array('profile' => $profile));
        }

        if ($request->input('mails')) {
            $mails = $this->mails($request->input('email'));
             return response()->json(array('mails' => $mails));
        }
    }
}


