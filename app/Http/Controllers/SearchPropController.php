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

class SearchPropController extends BaseController
{
    public function agentFinderProperties($state){
         $data = DB::table('properties')
                ->join('Facilities', 'properties.identity', '=', 'Facilities.identity')
                    ->join('quantity', 'properties.identity', '=', 'quantity.identity')
                        ->join('pictures_of_properties', 'properties.identity', '=', 'pictures_of_properties.identity')
                             ->select('properties.*', 'Facilities.*', 'quantity.*', 'pictures_of_properties.*')
                                   ->where('state_property_is_located', $state)
                                       ->get();
         return $data;
    }


    public function searchProps(Request $request){
        if ($request->input('theStates')){
            $theDatas = $this->agentFinderProperties($request->input('theStates'));
            return response()->json(array('data' => $theDatas));
        }
    }
}


