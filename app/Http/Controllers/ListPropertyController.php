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

class ListPropertyController extends BaseController
{
    public function list(Request $request){
        DB::insert('insert into properties () values ()' [])
        //DB::insert('insert into properties () values ()', []);
        if ($request->has('name')) {
           // DB::insert('insert into properties () values ()', []);
        }

        if ($request->filled('category')) {
            DB::update('update properties set category = ? where identity = ?', [$request->input('category')]);
        }
        if ($request->filled('title')) {
            DB::insert('update properties set title = ? where identity = ?', [$request->input('title')]);
        }
        if ($request->filled('size')) {
            DB::insert('update properties set size = ? where identity = ?', [$request->input('size')]);
        }
        if ($request->filled('measure')) {
            DB::insert('insert into properties (measure) values (?)', [$request->input('measure')]);
        }
        if ($request->filled('Federal C of O')) {
            DB::insert('insert into properties (fed_c_of_o) values (?)', [$request->input('Federal C of O')]);
        }
        if ($request->filled('State C of O')) {
            DB::insert('insert into properties (state_c_of_o) values (?)', [$request->input('State C of O')]);
        }
        if ($request->filled('Gazette')) {
            DB::insert('insert into properties (gazette) values (?)', [$request->input('Gazette')]);
        }
        if ($request->filled('Survey Plan')) {
            DB::insert('insert into properties (survey_plan) values (?)', [$request->input('Survey Plan')]);

        if ($request->filled('Family Receipt')) {
            DB::insert('insert into properties (family_receipt) values (?)', [$request->input('Family Receipt')]);
        }
        if ($request->filled('Registered Survey Plan')) {
            DB::insert('insert into properties (registered_survey_plan) values (?)', [$request->input('Registered Survey Plan')]);
        }
        if ($request->filled('Registered Deed of Conveyance')) {
            DB::insert('insert into properties (registered_deed_of_conveyance) values (?)', [$request->input('Registered Deed of Conveyance')]);
        }
        if ($request->filled('Registered Deed of Assignment')) {
            DB::insert('insert into properties (registered_deed_of_assignment) values (?)', [$request->input('Registered Deed of Assignment')]);
        }
        if ($request->filled('Deed of Assignment')) {
            DB::insert('insert into properties (registered_deed_of_assignment) values (?)', [$request->input('Deed of Assignment')]);
        }
        if ($request->filled('Deed of Conveyance')) {
            DB::insert('insert into properties (deed_of_conveyance) values (?)', [$request->input('Deed of Conveyance')]);
        }
        if ($request->filled('Governors Consent Letter')) {
            DB::insert('insert into properties (governors_consent_letter) values (?)', [$request->input('Governors Consent Letter')]);
        }
        if ($request->filled('Approved Building Plan')) {
            DB::insert('insert into properties (approved_building_plan) values (?)', [$request->input('Approved Building Plan')]);
        }
        if ($request->filled('others')) {
            DB::insert('insert into properties (others) values (?)', [$request->input('others')]);
        }



        // Facilities
        if ($request->filled('Newly Built')) {
            DB::insert('insert into properties (newly_built) values (?)', [$request->input('Newly Built')]);
        }
        if($request->filled('New Renovated')) {
            DB::insert('insert into properties (newly_renovated) values (?)', [$request->input('New Renovated')]);
        }
        if($request->filled('')) {
            DB::insert('insert into properties () values (?)', [$request->input('')]);
        }
        if($request->filled('')) {
            DB::insert('insert into properties () values (?)', [$request->input('')]);
        }
        if($request->filled('')) {
            DB::insert('insert into properties () values (?)', [$request->input('')]);
        }
        if($request->filled('')) {
            DB::insert('insert into properties () values (?)', [$request->input('')]);
        }
        if($request->filled('')) {
            DB::insert('insert into properties () values (?)', [$request->input('')]);
        }
        if($request->filled('')) {
            DB::insert('insert into properties () values (?)', [$request->input('')]);
        }
        if($request->filled('')) {
            DB::insert('insert into properties () values (?)', [$request->input('')]);
        }
        if($request->filled('')) {
            DB::insert('insert into properties () values (?)', [$request->input('')]);
        }
        if($request->filled('')) {
            DB::insert('insert into properties () values (?)', [$request->input('')]);
        }
        if($request->filled('')) {
            DB::insert('insert into properties () values (?)', [$request->input('')]);
        }
        if($request->filled('')) {
            DB::insert('insert into properties () values (?)', [$request->input('')]);
        }if($request->filled('')) {
            DB::insert('insert into properties () values (?)', [$request->input('')]);
        }
        if($request->filled('')) {
            DB::insert('insert into properties () values (?)', [$request->input('')]);
        }
        if($request->filled('')) {
            DB::insert('insert into properties () values (?)', [$request->input('')]);
        }
        if($request->filled('')) {
            DB::insert('insert into properties () values (?)', [$request->input('')]);
        }if($request->filled('')) {
            DB::insert('insert into properties () values (?)', [$request->input('')]);
        }
        if($request->filled('')) {
            DB::insert('insert into properties () values (?)', [$request->input('')]);
        }
        if($request->filled('')) {
            DB::insert('insert into properties () values (?)', [$request->input('')]);
        }
        if($request->filled('')) {
            DB::insert('insert into properties () values (?)', [$request->input('')]);
        }

       

       /* if (sizeof($data) == 0) {
            return response()->json(array('data' => false));
        }

        if (sizeof($data) != 0) {
             if ($data[0]->email != $email && $data[0]->password != $password) {
                 return response()->json(array('data' => 'Wrong Username or Password'));
             }

            return response()->json(array('data' => true));
        }
        //return;*/
    }
}


