<?php 

namespace Rocket\Presenters;

use Lewis\Presenter\AbstractPresenter;

class PagePresenter extends AbstractPresenter
{

	public function preetyUri()
	{
	    return '/'.ltrim($this->uri, '/');
	}	

}