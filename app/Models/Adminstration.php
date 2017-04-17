<?php

namespace Rocket\Models;

use Illuminate\Database\Eloquent\Model;
use Baum\Node;

class Adminstration extends Node
{
    protected $fillable = ['name', 'status', 'position', 'body', 'image', 'slug'];


    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = $value ?: str_slug($this->title);
    } 

    public function updateOrder($order, $orderAdminstration)
    {
        $orderAdminstration = $this->findOrFail($orderAdminstration);

        if ($order == 'before') {
            $this->moveToLeftOf($orderAdminstration);
        } elseif ($order == 'after') {
            $this->moveToRightOf($orderAdminstration);
        }
    }


}
