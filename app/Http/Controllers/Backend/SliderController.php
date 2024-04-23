<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    public function allSlider(){
        $allsliders = Slider::where('deleted_at', 0)->get();
        return view('sliders.all-slider', compact('allsliders'));
    }

    
    public function addSlider(Request $request){
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',            
        ]);
        
        if($request->file('image')){
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('uploads/Slider'), $filename);
        }

        Slider::insert([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $filename
        ]);

        $notification = [
            'message' => 'Slide Image Added Successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.slider')->with($notification);
    }

    public function UpdateSlider(Request $request){
        // return $request;
       $sliderId = $request->id;
        $updateSlider = Slider::findOrFail($sliderId);
        // return $updateSlider;
        $updateSlider->title = $request->title;
        $updateSlider->description = $request->description;
        
        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('uploads/Slider/'.$updateSlider->photo));
            $filename = $file->getClientOriginalName();
            $file->move(public_path('uploads/Slider'), $filename);
            $updateSlider['image'] = $filename;
    
           }

           $updateSlider->save();

        $notification = [
            'message' => 'Slide Image Updated Successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.slider')->with($notification);
    }

    public function deleteSlider(Request $request){
        $sliderId = $request->id;        
        $deleteSlider = Slider::findOrFail($sliderId)->first();
        $deleteSlider->deleted_at = 1;
        $deleteSlider->save();

        $notification = [
            'message' => 'Slide Image deleted Successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.slider')->with($notification);
    }
}
