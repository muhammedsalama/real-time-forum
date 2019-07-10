<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $fillable = [
        'title',
        'body',
        'slug',
        'category_id'
    ];

    public function replies(){
        return $this->hasMany('App\Reply');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }

}
