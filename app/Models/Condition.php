<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    use HasFactory;

    public function condition_user()
    {
        return $this->hasMany(Condition_user::class);
    }

    public function supporter()
    {
        return $this->hasMany(Supporter::class);
    }
}
