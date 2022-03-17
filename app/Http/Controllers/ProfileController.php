<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $userInfo=User::where('id','=',Auth::user()->id)->first();

        return view('profile',
		[
		  'userInfo'=>$userInfo
		]);
    }

    public function crop(Request $request)
    {
        $dest = 'user_image/';
        $file = $request->file('upload');
        $new_image_name = 'UIMG'.date('ymdHis').uniqid().'.jpg';
        $move = $file->move(public_path($dest), $new_image_name);

        if(!$move){
            return response()->json(['status'=>0, 'msg'=>'Something went wrong']);
        }else{
            $userInfo=User::where('id','=',Auth::user()->id)->first();
            $userPhoto = $userInfo->picture;
            if($userPhoto !=''){
                unlink($dest.$userPhoto);
            }

            User::where('id','=',Auth::user()->id)->update(['picture'=>$new_image_name]);
            return response()->json(['status'=>1, 'msg'=>'Your profile picture has been updated successfully', 'name'=>$new_image_name]);
        }
    }
}
