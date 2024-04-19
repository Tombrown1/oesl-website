<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProjectCategory;
use App\Models\Project;
use Illuminate\Support\Str;


class ProjectController extends Controller
{

       
    public function allProject(){
        $allprojects = Project::with('ProjectCat')->where('deleted_at', 0)->get();
        // return $allprojects;
        $projectcategory = ProjectCategory::where('deleted_at', 0)->get();
        // return $projectcategory;
        return view('projects.all-project', compact('projectcategory', 'allprojects'));
    }

    public function addProject(Request $request){
        $request->validate([
            'project_cat_id' => 'required|integer',
            'name' => 'required|string',
            'editor1' => 'required|string',
        ]);

        // return $request;
        
        if($request->file('image')){
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('uploads/projects'), $filename);
        }
        // return $request;

        $slug = Str::slug($request->name, '-');

        Project::insert([
            'project_cat_id' => $request->project_cat_id,
            'title' => $request->name,
            'slug' => $slug,
            'description' => $request->editor1,
            'image' => $filename
        ]);

        $notification = [
            'message' => 'Project Added Successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.project')->with($notification);
    }
    // end of Project Add

    //  Beginning of Project Update
    public function updateProject(Request $request){
        $request->validate([
            'project_cat_id' => 'required|integer',
            'title' => 'required|string',
            'description' => 'required|string'
        ]);

        // return $request;

       $projectId = $request->id;
        $updateProject = Project::findOrFail($projectId);
        // return $updateProject;
        $slug = Str::slug($request->title, '-');

        $updateProject->title = $request->title;
        $updateProject->project_cat_id = $request->project_cat_id;
        $updateProject->description = $request->description;
        $updateProject->slug = $slug;
        
        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('uploads/images/'.$updateProject->photo));
            $filename = $file->getClientOriginalName();
            $file->move(public_path('uploads/projects'), $filename);
            $updateProject['image'] = $filename;
    
           }
        //    return $updateProject;
           $updateProject->save();

        $notification = [
            'message' => 'Project Updated Successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.project')->with($notification);
    }

    //Partial Delete Project
    public  function deleteProject(Request $request){
        $ProjectId = $request->id;
        $deleteProject= Project::findOrFail($ProjectId);
        // return $deleteProject;
        $deleteProject->deleted_at = 1;
        $deleteProject->save();

        $notification = [
            'message' => 'Project deleted  Successfully!',
            'alert-type' => 'success'
        ];

        return back()->with($notification);
    }




    public function ProjectCategory(){
        $projectcategory = ProjectCategory::where('deleted_at', 0)->get();
        return view('projects.all-project-category', compact('projectcategory'));
    }

    public function addProjectCat(Request $request){
        $request->validate([
            'cat_name' => 'required|string',
            'description' => 'required|string',
        ]);
        
        
        $slug = Str::slug($request->cat_name, '-');
        // return $slug;
        
        ProjectCategory::insert([
            'name' => $request->cat_name,
            'slug' => $slug,
            'description' => $request->description,
        ]);

        $notification = [
            'message' => 'Service Category Added Successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('project.category')->with($notification);
    }


    public function UpdateProjectCategory(Request $request){
        $ServiceProjectId = $request->id;

        // return $ServiceProjectId;
        $slug = Str::slug($request->name, '-');
      
        ProjectCategory::findOrFail($ServiceProjectId)->update([
            'name' =>$request->name,
            'description' =>$request->description,
            'slug' =>$slug,
        ]);
       
         
        $notification = [
            'message' => 'Project Category updated  Successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('project.category')->with($notification);
    }

    public  function deleteProjectCategory(Request $request){
        $ProjectCategoryId = $request->id;
        $deleteProjectCategory = ProjectCategory::findOrFail($ProjectCategoryId);
        // return $deleteProjectCategory;
        $deleteProjectCategory->deleted_at = 1;
        $deleteProjectCategory->save();

        $notification = [
            'message' => 'Project Category deleted  Successfully!',
            'alert-type' => 'success'
        ];

        return back()->with($notification);
    }


}
