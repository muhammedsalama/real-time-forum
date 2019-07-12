<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    /*protected $fillable = [
        'title',
        'body',
        'slug',
        'category_id',
        'user_id'
    ];*/
    protected $guarded = [];

    public function replies(){
        return $this->hasMany(Reply::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }


}
