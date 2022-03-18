<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
   public function getPaginateByLimit(int $limit_count = 10)
    {
        return $this->orderBy('updated_at','DESC')->paginate($limit_count);
    }
    
    public function store()
    {
        return $this->belongsTo('App\Store');
    }
    
    protected $fillable = [
           'review',
           'chest',
           'arm',
           'shoulder',
           'belly',
           'back',
           'leg',
           'comment',          
           'updated_at',
           'user_id',
           'store_id',
        ];
        
       
        
        



}
