<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Like;


class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'body', 
        'image_url',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function isLikedByAuthUser() :bool
    {
        $authUserId = \Auth::id();
        $likersArr = array();

        if(is_array($this->likes) || is_object($this->likes)) {
             foreach ($this->likes as $like) {
                 array_push($likersArr, $like->user_id); 
                } 
            }

        if(in_array($authUserId, $likersArr)){
            return true;
         }else{
            return false;
        }
    }

    public function getPaginateByLimit(int $limit_count = 10)
    {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }

}
