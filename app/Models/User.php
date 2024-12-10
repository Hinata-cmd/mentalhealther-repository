<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Age;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

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

    public function area_user()
    {
        return $this->hasMany(Area_user::class);
    }

    public function condition_user()
    {
        return $this->hasMany(Condition_user::class);
    }

    public function follower()
    {
        return $this->hasMany(Follower::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
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
