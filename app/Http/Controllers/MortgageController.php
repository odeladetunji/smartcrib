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

class MortgageController extends BaseController
{
    public function mortgage(Request $request){
        // $email = $request->input('email');
        // $password = $request->input('password');
        // $data = DB::select('select email from registration where email = ?', [$email]);

        // if (sizeof($data) == 0) {
        //     $this->randomStringGenerator($email, $password);
        //     return response()->json(array('data' => true));
        // }
        return view('mortgage');
        
    }
}


