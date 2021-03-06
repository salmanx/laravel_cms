<?php

namespace Rocket\Models;

// use Illuminate\Database\Eloquent\Model;

use Baum\Node;

class Page extends Node
{
    protected $fillable = [
    	'title', 'name', 'uri', 'body', 'template', 'hidden'
    ];

    public function setNameAttribute($value)
    {
    	$this->attributes['name'] = $value ?: null;
    }

    public function setTemplateAttribute($value)
    {
    	$this->attributes['template'] = $value ?: null;
    }

    public function setHiddenAttribute($value)
    {
        $this->attributes['hidden'] = $value ?: false;
    }    

    public function updateOrder($order, $orderPage)
    {
        $orderPage = $this->findOrFail($orderPage);

        if ($order == 'before') {
            $this->moveToLeftOf($orderPage);
        } elseif ($order == 'after') {
            $this->moveToRightOf($orderPage);
        } elseif($order == 'childOf') {
            $this->makeChildOf($orderPage);
        } elseif($order == 'makeSibiling'){
            $this->makeSiblingOf($orderPage);
        }
    }

}
