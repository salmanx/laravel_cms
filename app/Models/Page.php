<?php

namespace Rocket\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
    	'title', 'name', 'uri', 'content', 'template',
    ];

    public function setNameAttribute($value)
    {
    	$this->attributes['name'] = $value ?: null;
    }

    public function settemplateAttribute($value)
    {
    	$this->attributes['template'] = $value ?: null;
    }

}
