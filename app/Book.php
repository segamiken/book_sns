<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // UserModelとのRelation
    public function user()
    {
        return $this->belongsTo('App\User');
    }


    protected $guarded = array('id');
 
    // Book validation
	public static $rules = array(
        'user_id' => 'required',
        'title' => 'required',
        'content' => 'required'
    );
}
