<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Supporter;
use App\Models\Age;
use App\Models\Post;
use App\Models\Area;
use App\Models\Work;
use App\Models\Condition;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public function supporter()
    {
        return $this->belongsTo(Supporter::class);
    }

    public function age()
    {
        return $this->belongsTo(Age::class);
    }

    public function post()
    {
        return $this->hasMany(Post::class);
    }

    public function message()
    {
        return $this->hasMany(Message::class);
    }

    public function areas()
    {
        return $this->belongsToMany(Area::class);
    }

    public function conditions()
    {
        return $this->belongsToMany(Condition::class);
    }

    public function works()
    {
        return $this->belongsToMany(Work::class, 'user_work');
    }

    public function follower()
    {
        return $this->hasMany(Follower::class);
    }

    public function users()
    {
        $users = Users::all();
        return view('posts.index')->with('users', $users);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'sex',
        'age_id',
        'type',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
