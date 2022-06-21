<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use PDO;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $guarded = [];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
    public function getNameAttribute($value)
    {
        return ucwords($value);
    }
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function likedBlogs()
    {
        return $this->belongsToMany(Blog::class);
    }
    public function isLiked($blog)
    {
        return auth()->user()->likedBlogs && auth()->user()->likedBlogs->contains('id', $blog->id);
    }
}
