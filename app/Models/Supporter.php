<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Work;
use App\Models\Area;
use App\Models\Condition;

class Supporter extends Model
{
    use HasFactory;

    protected $fillable = [
        'work_id',
        'condition_id',
        'area_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function works()
    {
        return $this->hasMany(Work::class);
    }

    public function areas()
    {
        return $this->hasMany(Area::class);
    }

    public function conditions()
    {
        return $this->hasMany(Condition::class);
    }
}
