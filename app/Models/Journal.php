<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    use HasFactory;

    // $table->date('date_of_creation')->nullable();
    // $table->string('name');
    // $table->string('email')->unique();
    // $table->string('specialty');

    protected $fillable=[
        'date_of_creation','name','email','specialty'
    ];

    public function editor()
    {
        return $this->belongsToMany('App\Models\Editor');
    }

    public function author()
    {
        return $this->belongsToMany('App\Models\Author');
    }

    public function reviewer()
    {
        return $this->belongsToMany('App\Models\Reviewer');
    }
}
