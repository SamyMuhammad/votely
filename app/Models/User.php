<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

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
    ];

    public function getAvatar()
    {
        // $default = 'https://ui-avatars.com/api/?size=200&name=Jhon' . $this->name;
        // return 'https://www.gravatar.com/avatar/' . md5(strtolower(trim($this->email))) . '?d=' . urlencode($default) . '&s=200';

        return 'https://www.gravatar.com/avatar/' . md5(strtolower(trim($this->email))) . '?d=robohash&s=200';
    }

    public function ideas(): HasMany
    {
        return $this->hasMany(Idea::class);
    }
}
