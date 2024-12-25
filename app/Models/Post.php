<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

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

    public function like()
    {
        return $this->hasMany(Like::class);
    }

    public function getPaginateByLimit(int $limit_count = 10)
    {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }

}
