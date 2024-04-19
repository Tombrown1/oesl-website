<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function adminDashboard(){
        $allSettings = Setting::findOrFail(1)->first();
        $allUsers = User::where('deleted_at', 0)->get();
        // return $allUsers;
        return view('admin.index', compact('allSettings', 'allUsers'));
    }

    // public function adminDashboard(){
    //     return view('admin.index');
    // }

    public function adminLogout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }

    public function adminLogin(){
        return view('admin.admin-login');
    }

    public function adminProfile(){
        $id = auth::user()->id;
        $profileData = User::find($id);
        // return $profileData;
        return view('admin.admin-profile', compact('profileData'));
    }

    public function adminProfileUpdate(Request $request){
        $request->validate([
            'username' => 'required|string',
            'name' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',
            'address' => 'required|string',
        ]);

        $id = Auth::user()->id;
        $updateProfile = User::find($id);

        if($request->file('photo')){
            $file = $request->file('photo');
            @unlink(public_path('uploads/profile/'.$updateProfile->photo));
            $filename = $file->getClientOriginalName();
            $file->move(public_path('uploads/profile'), $filename);
            $updateProfile['photo'] = $filename;
    
           }

        $password = Hash::make($request->password);

        $updateProfile->username = $request->username;
        $updateProfile->name = $request->name;
        $updateProfile->email = $request->email;
        $updateProfile->phone = $request->phone;
        $updateProfile->address = $request->address;
        $updateProfile->password = $password;

        $updateProfile->save();

        $notification = [
            'message' => 'User record updated successfully',
            'alert-type' => 'success'
        ];

        return back()->with($notification);
    }

    public function adminChangePassword(){
        $id = auth::user()->id;
        $profileData = User::find($id);
        return view('admin.change-password', compact('profileData'));
    }

    public function updateChangePassword(Request $request){
         $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed'
        ]);

        // return $request;
        // Check if Old Password Match with the Existing One

        if(!Hash::check($request->old_password, auth::user()->password)){
            $notification = [
                'message' => 'Password does not match',
                'alert-type' => 'error'
            ];

            return back()->with($notification);
        }

       
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        $notification = [
            'message' => 'Password Updated successfully',
            'alert-type' => 'success'
        ];

        return back()->with($notification);
    }
}
