<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
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
    protected $table = 'users';

    protected $fillable = [
        'id',
        'nama',
        'username',
        'password',
        'level',
    ];

    protected $primaryKey = 'id';

    protected $hidden = 'password';

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */

    /* protected $hidden = [
        'password',
        'remember_token',
    ]; */

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    
    /* protected $casts = [
        'email_verified_at' => 'datetime',
    ]; */


    public function masyarakat() : HasMany
    {
        return $this->hasMany(Masyarakat::class);
    }

    public function petugas() : HasMany
    {
        return $this->hasMany(Petugas::class);
    }
}
