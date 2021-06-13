<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class ChangePasswordController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }






    public function index(){
        return view('auth.passwords.change');
    }


    public function changepassword(Request $request){
        $this->validate($request, [
            'oldpassword' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required'

        ]);

        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->oldpassword,$hashedPassword)){
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();


            return redirect()->route('login')->with('successMessage', "Password change successfully.");
        }
        else{
            return redirect()->back()->with('errorMessage', "Current password is invaild.");
        }
    }


}


