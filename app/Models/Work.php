<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Work extends Model
{
    use HasFactory;

    public function supporter()
    {
        return $this->hasMany(Supporter::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_work');
    }

}
