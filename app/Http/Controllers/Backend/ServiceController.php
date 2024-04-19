<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AllServices;
use App\Models\ServiceCategory;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function mainServices(){
        $viewService = AllServices::where('id', 1)->where('deleted_at', 0)->first();
        // return $viewService;
        return view('services/main_services', compact('viewService'));
    }

    public function mainServiceUpdate(Request $request){
        $request->validate([
            'title' => 'required|string',
            'subtitle' => 'required|string',
            'editor1' => 'required|string'
        ]);
       
        // return $request;
        $mainservicesUpdate = AllServices::where('id', 1)->first();
        
        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('uploads/services/'.$mainservicesUpdate->image));
            $filename = $file->getClientOriginalName();
            $file->move(public_path('uploads/services'), $filename);
            $mainservicesUpdate['image'] = $filename;
            
        }
        $slug = Str::slug($request->title, '-');
        // return $mainservicesUpdate;

        $mainservicesUpdate->title = $request->title;
        $mainservicesUpdate->subtitle = $request->subtitle;
        $mainservicesUpdate->description = $request->editor1;
        $mainservicesUpdate->slug = $slug;
        // $mainservicesUpdate->image = $filename; 

        // return $mainservicesUpdate;

        $mainservicesUpdate->save();

        $notification = [
            'message' => 'Services Content Updated Successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('view.services',)->with($notification);
    }






    public function allServices(){
        $all_services = Service::with('ServiceCat')->where('deleted_at', 0)->Orwhere('status', 1)->get();
        $services_cat = ServiceCategory::where('deleted_at', 0)->get();
        return view('services.all-services', compact('services_cat', 'all_services'));
    }

    public function addService(Request $request){
        $request->validate([
            'service_cat_id' => 'required|integer',
            'name' => 'required|string',
            'editor1' => 'required|string',
        ]);

        
        if($request->file('image')){
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('uploads/services'), $filename);
        }
        // return $request;

        $slug = Str::slug($request->name, '-');

        Service::insert([
            'service_cat_id' => $request->service_cat_id,
            'name' => $request->name,
            'slug' => $slug,
            'description' => $request->editor1,
            'image' => $filename
        ]);

        $notification = [
            'message' => 'Service Added Successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.services')->with($notification);
    }

    
    public function serviceCategory(){
        $services_cat = ServiceCategory::where('deleted_at', 0)->get();
        // return $services_cat;
        return view('services.service-category', compact('services_cat'));
    }

    public function addServiceCategory(Request $request){
        $request->validate([
            'cat_name' => 'required|string',
            'description' => 'required|string',
        ]);
        
        
        $slug = Str::slug($request->cat_name, '-');
        // return $slug;
        
        ServiceCategory::insert([
            'name' => $request->cat_name,
            'slug' => $slug,
            'description' => $request->description,
        ]);

        $notification = [
            'message' => 'Service Category Added Successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('service.category')->with($notification);
    }

     //  Beginning of Service Update
     public function updateService(Request $request){
        // return $request;
        $serviceId = $request->id;
        $updateservice = service::findOrFail($serviceId);
        // return $updateservice;
        $slug = Str::slug($request->name, '-');
        $updateservice->name = $request->name;
        $updateservice->service_cat_id = $request->service_cat_id;
        $updateservice->description = $request->description;
        $updateservice->slug = $slug;
        
        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('uploads/services/'.$updateservice->photo));
            $filename = $file->getClientOriginalName();
            $file->move(public_path('uploads/services'), $filename);
            $updateservice['image'] = $filename;
    
           }

           $updateservice->save();

        $notification = [
            'message' => 'Project Updated Successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.services')->with($notification);
    }
 //  End of Service Update

     //Partial Delete Service
     public  function deleteService(Request $request){
        $ServiceId = $request->id;
        $deleteService= Service::findOrFail($ServiceId);
        // return $deleteService;
        $deleteService->deleted_at = 1;
        $deleteService->save();

        $notification = [
            'message' => 'Service deleted  Successfully!',
            'alert-type' => 'success'
        ];

        return back()->with($notification);
    }


    public function UpdateServicesCategory(Request $request){
        $ServiceCategoryId = $request->id;

        // return $ServiceCategoryId;
        $slug = Str::slug($request->cat_name, '-');
      
        ServiceCategory::findOrFail($ServiceCategoryId)->update([
            'name' =>$request->cat_name,
            'description' =>$request->description,
            'slug' =>$slug,
        ]);
       
         
        $notification = [
            'message' => 'Service Category updated  Successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('service.category')->with($notification);
    }

    public  function deleteServiceCategory(Request $request){
        $ServiceCategoryId = $request->id;
        $deleteServiceCategory = ServiceCategory::findOrFail($ServiceCategoryId);
        // return $deleteServiceCategory;
        $deleteServiceCategory->deleted_at = 1;
        $deleteServiceCategory->save();

        $notification = [
            'message' => 'Service Category deleted  Successfully!',
            'alert-type' => 'success'
        ];

        return back()->with($notification);
    }
}
