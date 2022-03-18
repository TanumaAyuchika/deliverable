<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    public function getPaginateByLimit(int $limit_count = 10)
    {
        return $this->orderBy('updated_at','DESC')->paginate($limit_count);
    }
    
   protected $fillable = [
       'name',
       'address',
    ];
    
    public function reviews()
    {
        return $this->hasMany('App\Review');
    }
}
