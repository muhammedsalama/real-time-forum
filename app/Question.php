<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Reply;
use App\User;
use App\Category;




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
        return $this->hasMany(Reply::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

}
