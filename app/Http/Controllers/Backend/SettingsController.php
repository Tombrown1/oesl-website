<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function settingAdmin(){
        return view('admin.setting');
    }

    public function AddSettingAdmin(Request $request){
            $request->validate([
                'sitename' => 'required|string',
                'siteemail' => 'required|string',
                'sitephone' => 'required|string',
                'address' => 'required|string',
                'address2' => 'required|string',
                'facebook' => 'required|string',
                'instagram' => 'required|string',
                'linkedin' => 'required|string',
            ]);

            // return $request;

            // Setting::insert([
            //     'sitename' => $request->sitename,
            //     'sitetitle' => $request->sitename,
            //     'email' => $request->siteemail,
            //     'phone' => $request->sitephone,
            //     'address' => $request->address,
            //     'facebook' => $request->facebook,
            //     'instagram' => $request->instagram,
            //     'linkedin' => $request->linkedin,
            // ]);

            $updateSettings = Setting::findOrFail(1, 'id')->first();
            // return $updateSettings;
                $updateSettings->sitename = $request->sitename;
                $updateSettings->email = $request->siteemail;
                $updateSettings->email2 = $request->siteemail2;
                $updateSettings->phone = $request->sitephone;
                $updateSettings->phone2 = $request->sitephone2;
                $updateSettings->address = $request->address;
                $updateSettings->address2 = $request->address2;
                $updateSettings->facebook = $request->facebook;
                $updateSettings->instagram = $request->instagram;
                $updateSettings->linkedin = $request->linkedin;

                $updateSettings->save();

            $notification = [
                'message' => 'Admin Setting Updated Successfully!',
                'alert-type' => 'success',
            ];

            return redirect()->route('admin.dashboard')->with($notification);
    }

    public function updateAbout(Request $request){
        $request->validate([
            'vision' => 'required|string',
            'mission' => 'required|string',
            'core_value' => 'required|string',
            'editor1' => 'required|string'
        ]);
       

        $UpdateAbout = Setting::where('id', 1)->first();
        // return $UpdateAbout;

        if($request->file('about_image')){
            $file = $request->file('about_image');
            @unlink(public_path('uploads/images/'.$UpdateAbout->about_image));
            $filename = $file->getClientOriginalName();
            $file->move(public_path('uploads/images'), $filename);
            $UpdateAbout['about_image'] = $filename;
    
           }

        $UpdateAbout->vision = $request->vision;
        $UpdateAbout->mission = $request->mission;
        $UpdateAbout->core_value = $request->core_value;
        $UpdateAbout->about = $request->editor1;
        // $UpdateAbout->about_image = $filename;

        $UpdateAbout->save();

        $notification = [
            'message' => 'About Setting Updated Successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('admin.dashboard',)->with($notification);
    }

    public function updateLogo(Request $request){
        // return $request;
        
        $updateLogo = Setting::where('id', 1)->first();
        
        if($request->file('logo')){
            $file = $request->file('logo');
            @unlink(public_path('uploads/images/'.$updateLogo->photo));
            $filename = $file->getClientOriginalName();
            $file->move(public_path('uploads/images'), $filename);
            $updateLogo['logo'] = $filename;
    
           }
          
        $updateLogo->logo = $filename;
        $updateLogo->save();

        $notification = [
            'message' => 'Logo Updated Successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('admin.dashboard')->with($notification);
    }

    public function updateBanner(Request $request){
        // return $request;
        
        $updateBanner = Setting::where('id', 1)->first();
        
        if($request->file('banner')){
            $file = $request->file('banner');
            @unlink(public_path('uploads/images/'.$updateBanner->photo));
            $filename = $file->getClientOriginalName();
            $file->move(public_path('uploads/images'), $filename);
            $updateBanner['banner'] = $filename;
    
           }
        //    return $filename;
          
        $updateBanner->banner = $filename;
        $updateBanner->save();

        $notification = [
            'message' => 'Banner Updated Successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('admin.dashboard')->with($notification);
    }
}
