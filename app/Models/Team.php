<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function TeamCategory(){
        return $this->hasOne(TeamCategory::class, 'id', 'team_category_id');
    }
}
