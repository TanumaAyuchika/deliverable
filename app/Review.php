<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use SoftDeletes;
    
   public function getPaginateByLimit(int $limit_count = 10)
    {
        return $this->orderBy('updated_at','DESC')->paginate($limit_count);
    }
    
    public function store()
    {
        return $this->belongsTo('App\Store');
    }
    
    public function likes()
    {
        return $this->hasMany('App\Likes','review_id');
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
    
    public function is_liked_by_auth_user()
    {
     $id = Auth::id();

     $likers = array();
     foreach($this->likes as $like) {
       array_push($likers, $like->user_id);
      }

    if (in_array($id, $likers)) {
      return true;
     } else {
      return false;
     }
    
    }

        
       
        
}
