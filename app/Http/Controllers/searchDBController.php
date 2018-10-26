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

class searchDBController extends BaseController
{
	public function queryDB($state){
         $data = DB::table('properties')
              ->join('facilities', 'properties.identity', '=', 'facilities.identity')
                  ->join('quantity', 'properties.identity', '=', 'quantity.identity')
                      ->select('properties.*', 'facilities.*', 'quantity.*')
                         ->where('state_property_is_located', $state)
                             ->get();
         return $data;
	}

    public function search(Request $request){

    	 $a_message = 'routing from accountpage';

    	 switch ($request->input('routing')) {
    	 	case 'routing from accountpage':
    	 		return view('map')->with('value', $a_message);
    	 		break;

    	 	case 'use navigator alone':
    	 	    $data = $this->queryDB($request->input('city'));
    	 		return response()->json(array('data' => $data));
    	 		break;
    	 	
    	 	default:
    	 		break;
    	 }

    	 if ($request->input('city')) {
    	 	 $theDatas = $this->queryDB($request->input('city'));
    	 	 return response()->json(array('data' => $theDatas));
    	 }
    }
}