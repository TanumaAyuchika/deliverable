<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
   public function getPaginateByLimit(int $limit_count = 10)
    {
        return $this->orderBy('updated_at','DESC')->paginate($limit_count);
    }
    
    public function stores()
    {
        return $this->hasMany('App\Store');
    }
    
    protected $fillable = [
           'title',
           'review',
           'chest',
           'arm',
           'shoulder',
           'belly',
           'back',
           'leg',
           'comment',          
           'updated_at',
        ];
        
        protected $attributes = [
           'title' => 'あああ',
           'body' => 'ああああ',
           'review' => 5,
        ];
        
        



}
