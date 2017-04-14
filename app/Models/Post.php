<?php

namespace Rocket\Models;

use Illuminate\Database\Eloquent\Model;

use Rocket\User;
use Rocket\Models\Category;
use Carbon\Carbon;

class Post extends Model
{
    protected $fillable = ['author_id', 'title', 'slug', 'body', 'excerpt', 'published_at', 'status', 'image' , 'hidden'];

    protected $dates = ['published_at'];

    public function setPublishedAtAttribute($value)
    {
    	$this->attributes['published_at'] = $value ?: Carbon::now();
    }


    public function setStatusAttribute($value)
    {
        $this->attributes['status'] = $value ?: true;
    }


    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = str_slug($this->title);
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
