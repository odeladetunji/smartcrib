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
                      ->join('pictures_of_properties', 'properties.identity', '=', 'pictures_of_properties.identity')
                           ->select('properties.*', 'facilities.*', 'quantity.*', 'pictures_of_properties.*')
                                 ->where('state_property_is_located', $state)
                                     ->get();
         return $data;
	}

	public function searchEngine($state){
         $data = DB::table('properties')
              ->join('facilities', 'properties.identity', '=', 'facilities.identity')
                  ->join('quantity', 'properties.identity', '=', 'quantity.identity')
                      ->join('pictures_of_properties', 'properties.identity', '=', 'pictures_of_properties.identity')
                           ->select('properties.*', 'facilities.*', 'quantity.*', 'pictures_of_properties.*')
                                 ->where('state_property_is_located', $state)
                                     ->get();
         return $data;
	}

    public function search(Request $request){

    	 $a_message = 'routing from accountpage';
         $imageUrlConstant = '/storage/images/';

    	 switch ($request->input('routing')) {
    	 	case 'routing from accountpage':
    	 		return view('map')->with('value', $a_message, 'imageUrlConstant', $imageUrlConstant);
    	 		break;

    	 	case 'use navigator alone':
    	 	    $data = $this->queryDB($request->input('city'));
    	 		return response()->json(array('data' => $data));
    	 		break;
    	 	
    	 	default:
    	 		break;
    	 }

    	 if ($request->input('city')) {
    	 	 $theDatas = $this->searchEngine($request->input(''), $request->input(''));
    	 	 return response()->json(array('data' => $theDatas));
    	 }

    	 if ($request->input('searchDB')) {
    	 	 
    	 }
    }
}