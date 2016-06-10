<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class Category extends Model
{
    protected $fillable = [
        'name'
    ];

    public $timestamps = true;


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function getPosts()
    {
        return $this->hasMany('App\Post');
    }

}
