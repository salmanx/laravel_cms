<?php

namespace Rocket\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Notice extends Model
{
    protected $fillable = ['title', 'slug', 'body', 'published_at', 'status', 'image'];

    protected $dates = ['published_at']; 

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = str_slug($this->title);
    }     
    
    public function setPublishedAtAttribute($value)
    {
        $this->attributes['published_at'] = $value ?: Carbon::now();
    }

    public function setStatusAttribute($value)
    {
        $this->attributes['status'] = $value ?: true;
    }    
}
