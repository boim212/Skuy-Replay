<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Models\User;
use Hash;

class ResetPasswordController extends Controller
{
    public function getPass($token) 
    {
        $judul = "Reset Password Admin || Admin Skuy-Replay";
        return view('admin.reset',compact('judul'), ['token' => $token]);
    }
    
    public function updatePass(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required',
        ]);
        $updatePassword = DB::table('password_resets')
        ->where(['email' => $request->email, 'token' => $request->token])
        ->first();
        
        if(!$updatePassword)
            return back()->withInput()->with('error', 'Invalid token!');
        $user = User::where('email', $request->email)
        ->update(['password' => Hash::make($request->password)]);
        DB::table('password_resets')->where(['email'=> $request->email])->delete();
        
        return redirect('/login')->with('success', 'Your password has been changed!');
    }
}
