<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Crypt;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // Define constants for roles
    const ROLE_ADMIN = 'admin';
    const ROLE_STANDARD = 'standard';
    const ROLE_LIMITED = 'limited';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first',
        'last',
        'email',
        'password',
        'role', 
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
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function tips()
    {
        return $this->hasMany(Tip::class, 'user_id');
    }

    // Define methods to check user roles
    public function isAdmin()
    {
        return $this->role === self::ROLE_ADMIN;
    }

    public function isStandard()
    {
        return $this->role === self::ROLE_STANDARD;
    }

    public function isLimited()
    {
        return $this->role === self::ROLE_LIMITED;
    }

}
