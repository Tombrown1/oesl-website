<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $guarded = [];

    
    public function ProjectCat(){
        return $this->hasOne(ProjectCategory::class, 'id', 'project_cat_id');
    }
}
