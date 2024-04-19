<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TeamCategory;
use App\Models\Team;
use Illuminate\Support\Str;


class TeamController extends Controller
{
    public function allTeam(){
        $allteams = Team::with('TeamCategory')->where('deleted_at', 0)->get();
        $allteamcategorys = TeamCategory::where('deleted_at', 0)->get();
        // return $allteams;
      
        return view('team.all-team', compact('allteams', 'allteamcategorys'));
    }

    // All Team Method
    public function addTeam(Request $request){
        $request->validate([
            'team_cat_id' => 'required|integer',
            'name' => 'required|string',
            'editor1' => 'required|string',
        ]);

        // return $request;
        
        if($request->file('image')){
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('uploads/Teams'), $filename);
        }
        // return $request;

        $slug = Str::slug($request->name, '-');

        Team::insert([
            'team_category_id' => $request->team_cat_id,
            'name' => $request->name,
            'slug' => $slug,
            'description' => $request->editor1,
            'image' => $filename
        ]);

        $notification = [
            'message' => 'Team Added Successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.team')->with($notification);
    }

    //  Beginning of Service Update
    public function updateTeam(Request $request){
        // return $request;
       $teamId = $request->id;
        $updateteam = Team::findOrFail($teamId);
        // return $updateteam;
        $slug = Str::slug($request->name, '-');
        $updateteam->name = $request->name;
        $updateteam->description = $request->description;
        $updateteam->slug = $slug;
        
        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('uploads/images/'.$updateteam->photo));
            $filename = $file->getClientOriginalName();
            $file->move(public_path('uploads/Slider'), $filename);
            $updateteam['image'] = $filename;
    
           }

        //    return $updateteam;

           $updateteam->save();

        $notification = [
            'message' => 'Project Updated Successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.team')->with($notification);
    }
 //  End of Service Update

 
     //Partial Delete Team
     public  function deleteTeam(Request $request){
        $TeamId = $request->id;
        $deleteTeam= Team::findOrFail($TeamId);
        // return $deleteTeam;
        $deleteTeam->deleted_at = 1;
        $deleteTeam->save();

        $notification = [
            'message' => 'Team deleted  Successfully!',
            'alert-type' => 'success'
        ];

        return back()->with($notification);
    }


    //  Methods that process Team Category
    public function teamCategory(){
        $allteamcategorys = TeamCategory::where('deleted_at', 0)->get();
        return view('team.team-category', compact('allteamcategorys'));
    }

    public function addTeamCategory(Request $request){
        $request->validate([
            'cat_name' => 'required|string',
            'description' => 'required|string',
        ]);
        
        
        $slug = Str::slug($request->cat_name, '-');
        // return $request;
        
        TeamCategory::insert([
            'name' => $request->cat_name,
            'slug' => $slug,
            'description' => $request->description,
        ]);

        $notification = [
            'message' => 'Team Category Added Successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('team.category')->with($notification);
    }

    public function UpdateTeamCategory(Request $request){
        $teamCategoryId = $request->id;

        // return $teamCategoryId;
        $slug = Str::slug($request->cat_name, '-');
      
        TeamCategory::findOrFail($teamCategoryId)->update([
            'name' =>$request->cat_name,
            'description' =>$request->description,
            'slug' =>$slug,
        ]);
       
         
        $notification = [
            'message' => 'Team Category updated  Successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('team.category')->with($notification);
    }
}
