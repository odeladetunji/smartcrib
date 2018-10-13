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

class AccountController extends BaseController
{
    public function account(Request $request){
          $owner = $request->input('email');
          return view('account')->with('owner', $owner);
    }
}


