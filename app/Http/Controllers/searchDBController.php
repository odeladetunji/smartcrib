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
              ->join('Facilities', 'properties.identity', '=', 'Facilities.identity')
                  ->join('quantity', 'properties.identity', '=', 'quantity.identity')
                      ->join('pictures_of_properties', 'properties.identity', '=', 'pictures_of_properties.identity')
                           ->select('properties.*', 'Facilities.*', 'quantity.*', 'pictures_of_properties.*')
                                 ->where('state_property_is_located', $state)
                                     ->get();
         return $data;
	}

	public function searchEngine($state, $locaGv, $category){
         $query = DB::table('properties')
              ->join('Facilities', 'properties.identity', '=', 'Facilities.identity')
                  ->join('quantity', 'properties.identity', '=', 'quantity.identity')
                      ->join('pictures_of_properties', 'properties.identity', '=', 'pictures_of_properties.identity')
                           ->select('properties.*', 'Facilities.*', 'quantity.*', 'pictures_of_properties.*')
                                 ->where([
	                                 	     ['state_property_is_located', '=', $state],
	                                         ['local_government', '=', $locaGv],
	                                         ['category', '=', $category]
                                        ])
                                          ->get();
         return $query;
	}

	public function searchBedrooms($state, $locaGv, $category, $bedrooms){
         $query = DB::table('properties')
              ->join('Facilities', 'properties.identity', '=', 'Facilities.identity')
                  ->join('quantity', 'properties.identity', '=', 'quantity.identity')
                      ->join('pictures_of_properties', 'properties.identity', '=', 'pictures_of_properties.identity')
                           ->select('properties.*', 'Facilities.*', 'quantity.*', 'pictures_of_properties.*')
                                 ->where([
	                                 	     ['state_property_is_located', '=', $state],
	                                         ['local_government', '=', $locaGv],
	                                         ['category', '=', $category],
	                                         ['bedroom', '>=', $bedrooms]
                                        ])
                                          ->get();
         return $query;
	}

	public function searchPrices($state, $locaGv, $category, $prices){
         $query = DB::table('properties')
              ->join('Facilities', 'properties.identity', '=', 'Facilities.identity')
                  ->join('quantity', 'properties.identity', '=', 'quantity.identity')
                      ->join('pictures_of_properties', 'properties.identity', '=', 'pictures_of_properties.identity')
                           ->select('properties.*', 'Facilities.*', 'quantity.*', 'pictures_of_properties.*')
                                 ->where([
	                                 	     ['state_property_is_located', '=', $state],
	                                         ['local_government', '=', $locaGv],
	                                         ['category', '=', $category],
	                                         ['price', '>=', $prices]
                                        ])
                                          ->get();
         return $query;
	}

    public function searchTitle($state, $locaGv, $category, $title){
         $query = DB::table('properties')
              ->join('Facilities', 'properties.identity', '=', 'Facilities.identity')
                  ->join('quantity', 'properties.identity', '=', 'quantity.identity')
                      ->join('pictures_of_properties', 'properties.identity', '=', 'pictures_of_properties.identity')
                           ->select('properties.*', 'Facilities.*', 'quantity.*', 'pictures_of_properties.*')
                                 ->where([
	                                 	     ['state_property_is_located', '=', $state],
	                                         ['local_government', '=', $locaGv],
	                                         ['category', '=', $category],
	                                         ['title', '=', $title]
                                        ])
                                          ->get();
         return $query;
	}

	public function searchBedroomAndPrices($state, $locaGv, $category, $bedrooms, $prices){
         $query = DB::table('properties')
              ->join('Facilities', 'properties.identity', '=', 'Facilities.identity')
                  ->join('quantity', 'properties.identity', '=', 'quantity.identity')
                      ->join('pictures_of_properties', 'properties.identity', '=', 'pictures_of_properties.identity')
                           ->select('properties.*', 'Facilities.*', 'quantity.*', 'pictures_of_properties.*')
                                 ->where([
	                                 	     ['state_property_is_located', '=', $state],
	                                         ['local_government', '=', $locaGv],
	                                         ['category', '=', $category],
	                                         ['price', '>=', $prices],
	                                         ['bedroom', '=', $bedrooms]
                                        ])
                                          ->get();
         return $query;
	}

	public function searchPricesAndTitle($state, $locaGv, $category, $prices, $title){
         $query = DB::table('properties')
              ->join('Facilities', 'properties.identity', '=', 'Facilities.identity')
                  ->join('quantity', 'properties.identity', '=', 'quantity.identity')
                      ->join('pictures_of_properties', 'properties.identity', '=', 'pictures_of_properties.identity')
                           ->select('properties.*', 'Facilities.*', 'quantity.*', 'pictures_of_properties.*')
                                 ->where([
	                                 	     ['state_property_is_located', '=', $state],
	                                         ['local_government', '=', $locaGv],
	                                         ['category', '=', $category],
	                                         ['price', '>=', $prices],
	                                         ['title', '=', $title]
                                        ])
                                          ->get();
         return $query;
	}

	public function searchBedroomsAndTitle($state, $locaGv, $category, $bedrooms, $title){
         $query = DB::table('properties')
              ->join('Facilities', 'properties.identity', '=', 'Facilities.identity')
                  ->join('quantity', 'properties.identity', '=', 'quantity.identity')
                      ->join('pictures_of_properties', 'properties.identity', '=', 'pictures_of_properties.identity')
                           ->select('properties.*', 'Facilities.*', 'quantity.*', 'pictures_of_properties.*')
                                 ->where([
	                                 	     ['state_property_is_located', '=', $state],
	                                         ['local_government', '=', $locaGv],
	                                         ['category', '=', $category],
	                                         ['bedroom', '>=', $bedrooms],
	                                         ['title', '=', $title],
                                        ])
                                          ->get();
         return $query;
	}

	public function searchBedroomsPricesAndTitle($state, $locaGv, $category, $bedrooms, $prices, $title){
         $query = DB::table('properties')
              ->join('Facilities', 'properties.identity', '=', 'Facilities.identity')
                  ->join('quantity', 'properties.identity', '=', 'quantity.identity')
                      ->join('pictures_of_properties', 'properties.identity', '=', 'pictures_of_properties.identity')
                           ->select('properties.*', 'Facilities.*', 'quantity.*', 'pictures_of_properties.*')
                                 ->where([
	                                 	     ['state_property_is_located', '=', $state],
	                                         ['local_government', '=', $locaGv],
	                                         ['category', '=', $category],
	                                         ['bedroom', '>=', $bedrooms],
	                                         ['price', '>=', $prices],
	                                         ['title', '=', $title],
                                        ])
                                          ->get();
         return $query;
	}


    public function search(Request $request){

    	 $a_message = 'routing from accountpage';  // Greeting  //
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

    	 if ($request->input('searchDB')) {
	    	 	$bedrooms = $request->input('bedrooms');
	    	    $prices = $request->input('price');
	    	    $type = $request->input('title');
	    	    //return response()->json(array('tag' => $type));
    	 }

    	 if ($request->input('city')) {
    	 	 $theDatas = $this->queryDB($request->input('city'));
    	 	 return response()->json(array('data' => $theDatas));
    	 }

    	 if ($request->input('searchDB')) {
    	 	   if ($bedrooms == "Bedroom" && $prices == "select price" && $type == "Type of Property") {
    	 	   	  $searchDB = $this->searchEngine($request->input('state'), $request->input('locaGv'), $request->input('category'));
    	 	       return response()->json(array('data' => $searchDB, 'tag' => 'category state and locaGv Alone'));
    	 	   }
    	 }

    	 if ($bedrooms != "Bedroom" && $prices == "select price" && $type == "Type of Property") {
    	 	  $searchDB = $this->searchBedrooms($request->input('state'), $request->input('locaGv'), $request->input('category'), $request->input('bedrooms'));
    	 	  return response()->json(array('data' => $searchDB, 'tag' => 'Bedrooms'));
    	 }

    	 if ($bedrooms == "Bedroom" && $prices != "select price" && $type == "Type of Property") {
    	 	  $searchDB = $this->searchPrices($request->input('state'), $request->input('locaGv'), $request->input('category'), $request->input('price'));
    	 	  return response()->json(array('data' => $searchDB, 'tag' => 'Price'));
    	 }

    	 if ($bedrooms == "Bedroom" && $prices == "select price" && $type != "Type of Property") {
    	 	  $searchDB = $this->searchTitle($request->input('state'), $request->input('locaGv'), $request->input('category'), $request->input('title'));
    	 	   return response()->json(array('data' => $searchDB, 'tag' => 'Title'));
    	 }

    	 if ($bedrooms != "Bedroom" && $prices != "select price" && $type == "Type of Property") {
    	 	  $searchDB = $this->searchBedroomAndPrices($request->input('state'), $request->input('locaGv'), $request->input('category'), $request->input('bedrooms'), $request->input('price'));
    	 	   return response()->json(array('data' => $searchDB, 'tag' => 'Bedrooms and Price'));
    	 }

         if ($bedrooms == "Bedroom" && $prices != "select price" && $type != "Type of Property") {
    	   	  $searchDB = $this->searchPricesAndTitle($request->input('state'), $request->input('locaGv'), $request->input('category'), $request->input('price'), $request->input('title'));
    	 	   return response()->json(array('data' => $searchDB, 'tag' => 'Price and Title'));
    	 }

    	 if ($bedrooms != "Bedroom" && $prices == "select price" && $type != "Type of Property") {
    	 	  $searchDB = $this->searchBedroomsAndTitle($request->input('state'), $request->input('locaGv'), $request->input('category'), $request->input('bedrooms'), $request->input('title'));
    	 	   return response()->json(array('data' => $searchDB, 'tag' => 'Bedrooms and Title'));
    	 }

    	 if ($bedrooms != "Bedroom" && $prices != "select price" && $type != "Type of Property") {
    	       $searchDB = $this->searchBedroomsPricesAndTitle($request->input('state'), $request->input('locaGv'), $request->input('category'), $request->input('bedrooms'), $request->input('price'), $request->input('title'));
    	 	    return response()->json(array('data' => $searchDB, 'tag' => 'Bedrooms, Price and Title'));
    	 }

    }
}