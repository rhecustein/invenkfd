<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
        $UserInfo = User::where('id','=', session('LoggedUser'))->first();
        $data = ['UserInfo'=>$UserInfo];
        return view('profile');
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
            $UserInfo = User::where('id','=', session('LoggedUser'))->first();
            $userPhoto = $UserInfo->picture;
            if($userPhoto !=''){
                unlink($dest.$userPhoto);
            }

            User::where('id', session('LoggedUser'))->update(['picture'=>$new_image_name]);
            return response()->json(['status'=>1, 'msg'=>'Your profile picture has been updated successfully', 'name'=>$new_image_name, $UserInfo]);
        }
    }
}
