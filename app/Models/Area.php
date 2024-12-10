<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    public function area_user()
    {
        return $this->hasMany(Area_user::class);
    }

    public function supporter()
    {
        return $this->hasMany(Supporter::class);
    }
}
