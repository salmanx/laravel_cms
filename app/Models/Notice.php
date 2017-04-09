<?php

namespace Rocket\Models;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $fillable = ['title', 'slug', 'body', 'published_at', 'status'];
    
    public function setPublishedAtAttribute($value)
    {
    	$this->attributes['published_at'] = $value ?: null;
    }    
}
