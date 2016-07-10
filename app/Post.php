<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class Post extends Model
{
    protected $fillable = [
        'category_id',
        'title',
        'content',
        'link',
        'displayed_link',
        'published'
    ];

    public $timestamps = true;

    /**
     * @param $query
     * @return mixed
     */
    public function scopePublished($query)
    {
        return $query->where('published', '1');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }


}
