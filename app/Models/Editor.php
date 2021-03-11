<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editor extends Model
{
    use HasFactory;
    protected $fillable = [
        'phone', 'user_id', 'gender','bio','skype','photo','address'
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id' );
    }

    public function journal()
    {
        return $this->belongsToMany('App\Models\Journal');
    }
}
