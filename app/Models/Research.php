<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class research extends Model
{
    use HasFactory;

    protected $fillable=[
        'title','abstract','word_file','journal_id','author_id'
        ,'reviewer_id','editor_id'
    ];


    public function author()
    {
        return $this->belongsTo('App\Models\Author','author_id' );
    }

    public function editor()
    {
        return $this->belongsTo('App\Models\Editor','editor_id' );
    }

    public function journal()
    {
        return $this->belongsTo('App\Models\Journal','journal_id' );
    }

    public function reviewer()
    {
        return $this->belongsToMany('App\Models\Reviewer' );
    }


}
