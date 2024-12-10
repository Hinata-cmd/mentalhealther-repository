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

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function work()
    {
        return $this->belongsTo(Work::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function condition()
    {
        return $this->belongsTo(Condition::class);
    }
}
