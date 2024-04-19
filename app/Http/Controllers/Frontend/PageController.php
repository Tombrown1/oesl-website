<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\Service;
use App\Models\AllServices;
use App\Models\Project;
use App\Models\Contact;
use App\Models\Slider;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $services = Service::with('ServiceCat')->where('deleted_at', 0)->where('status', '!==1')->get();
        $projects = Project::with('ProjectCat')->where('deleted_at', 0)->where('status', 0)->get();
        // $serviceDetail = Service::where('slug', $slug)->first();
        $settings = Setting::where('id', 1)->first();
        $sliders = Slider::where('deleted_at', 0)->get();
        return view('frontend.index', compact('sliders', 'settings', 'services', 'projects'));
    }

    public function aboutUs(){
        $settings = Setting::where('id', 1)->first();
        // return $settings;
        return view('frontend.about-us', compact('settings'));
    }
    
    public function AllServices(){
        $settings = Setting::where('id', 1)->first();
        $allservices = AllServices::where('deleted_at', 0)->first();
        $services = Service::with('ServiceCat')->where('deleted_at', 0)->get();
        // return $services;
        return view('frontend.services', compact('settings', 'allservices', 'services'));
    } 
    public function Services(){
        $settings = Setting::where('id', 1)->first();
        $services = Service::with('ServiceCat')->where('deleted_at', 0)->get();
        // return $services;
        return view('frontend.services', compact('settings', 'services'));
    } 

    public function serviceDetails($slug){
        $serviceDetail = Service::where('slug', $slug)->first();
        // return $serviceDetail;
        $settings = Setting::where('id', 1)->first();
        $services = Service::with('ServiceCat')->where('deleted_at', 0)->where('status', '!==1')->get();
        return view('frontend.service-details', compact('services', 'settings', 'serviceDetail')); 
    }

    public function qhse(){
        $service_qhse = Service::with('ServiceCat')->where('status', 1)->first();
        // return $service_qhse;
        $settings = Setting::where('id', 1)->first();
        return view('frontend.qhse', compact('service_qhse', 'settings'));
    }
    
    public function Projects(){
        $settings = Setting::where('id', 1)->first();
        $project_overview = Project::where('status',1)->where('deleted_at', 0)->first();
        $projects = Project::where('deleted_at', 0)->where('status', 0)->get();
        // return $projects;
        return view('frontend.projects', compact('settings', 'projects', 'project_overview'));
    } 
    
    public function Contact(){
        $settings = Setting::where('id', 1)->first();
        return view('frontend.contact', compact('settings'));
    }

    public function addContact(Request $request){
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);


        // return $request;
        
        
        $addContact = new Contact;
        
        $addContact->name = $request->name;
        $addContact->email = $request->email;
        $addContact->subject = $request->subject;
        $addContact->message = $request->message;
        
        $addContact->save();

        // session()->flash('success', 'Thank you for reaching out. Our team will get in touch with you soon!');

        $notification = [
            'message' => 'Thank you for reaching out. Our team will get in touch with you soon!',
            'alert-type' => 'success'
        ];

        return redirect()->route('contact')->with($notification);
        // return back();
    }
}
