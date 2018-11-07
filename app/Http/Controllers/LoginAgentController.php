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

class LoginAgentController extends BaseController
{
    public function loginAgent(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');

        $data = DB::select('select email, password from agents where email = ?', [$email]);
        
        if (sizeof($data) == 0) {
            return response()->json(array('data' => false));
        }

        if (sizeof($data) != 0) {
             if ($data[0]->email != $email || $data[0]->password != $password) {
                 return response()->json(array('data' => 'Wrong Username or Password'));
             }

            return response()->json(array('data' => true, 'email' => $email));
        }
        //return;
    }
}


