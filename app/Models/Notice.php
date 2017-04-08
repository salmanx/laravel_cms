<?php

namespace Rocket\Models;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $fillable = ['title', 'slug', 'body'];
}
