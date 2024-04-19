<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public function ServiceCat(){
        return $this->hasOne(ServiceCategory::class, 'id', 'service_cat_id');
    }
}
