<?php

namespace Rocket\Models;

use Illuminate\Database\Eloquent\Model;

use Rocket\User;
use Rocket\Models\Category;


class Post extends Model
{
    protected $fillable = ['author_id', 'title', 'slug', 'body', 'excerpt', 'published_at'];

    protected $dates = ['published_at'];

    public function setPublishedAtAttribute($value)
    {
    	$this->attributes['published_at'] = $value ?: null;
    }

    public function author()
    {
    	return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

}
