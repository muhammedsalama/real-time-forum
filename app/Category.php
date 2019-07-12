<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    /*protected $fillable = [
        'name',
        'slug'
    ];*/

    protected $guarded = [];

    public function questions(){
        return $this->hasMany(Question::class);
    }

}
