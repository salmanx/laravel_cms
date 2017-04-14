<?php

namespace Rocket\Models;

use Illuminate\Database\Eloquent\Model;

use Rocket\Models\Post;

class Category extends Model
{
    protected $fillable = ['title', 'slug', 'image', 'hidden'];

    public function setSlugAttribute($value)
    {
    	$this->attributes['slug'] = str_slug($this->title);
    }

    public function setHiddenAttribute($value)
    {
        $this->attributes['hidden'] = $value ?: false;
    }  
    
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }    

}
