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

class SearchAgentController extends BaseController
{
    

    public function searchAgent(Request $request){
        $state = $request->input('state');
        //return response()->json(array('data' => $state));
        $data = DB::select('select * from agents where state = ?', [$state]);
      
        if (sizeof($data) == 0) {
            return response()->json(array('data' => false));
        }

        return response()->json(array('data' => $data));
        // if (sizeof($data) == 0) {
        //     $this->randomStringGenerator($email, $password);
        //     return response()->json(array('data' => true));
        // }
        //return;
    }
}


