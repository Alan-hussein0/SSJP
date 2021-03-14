<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'is_author',
        'is_reviewer',
        'is_manager',
        'is_editor'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function editor()
    {
        return $this->hasOne('App\Models\Editor' );
    }

    public function author()
    {
        return $this->hasOne('App\Models\Author' );
    }

    public function reviewer()
    {
        return $this->hasOne('App\Models\Reviewer' );
    }

    public function manager()
    {
        return $this->hasOne('App\Models\Manager' );
    }
}
