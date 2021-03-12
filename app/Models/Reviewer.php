<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviewer extends Model
{

    use HasFactory;

    protected $fillable=[
        'user_id','phone','gender','bio','skype','photo'
        ,'address','degree','specialty'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }

    public function research()
    {
        return $this->belongsToMany('App\Models\Reseach');
    }
}