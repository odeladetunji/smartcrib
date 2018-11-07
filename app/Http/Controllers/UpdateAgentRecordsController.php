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
    public function updateAgentRecords(Request $request){
        // $email = 
        // return response()->json(array('data' => $email));
        DB::update('update agents set first_name = ?, lastname = ?, telephone = ?, office_address = ?, home_address = ?, state = ?, local_government = ?, picture = ? where email = ?', [$request->input('firstname'), $request->input('lastname'), $request->input('office_phone'), $request->input('office_address'), $request->input('home_address'), $request->input('state'), $request->input('localgovernment'), $request->input('picture'), $request->input('email')]);
       
        return response()->json(array('data' => true));
    }
}


