<?php

namespace Rocket\View\Composers;

use Rocket\Models\Page;
use Illuminate\View\View;

class InjectPages 
{
	
	protected $pages;

	function __construct(Page $pages)
	{
		$this->pages = $pages;
	}

	public function compose(View $view)
	{
		$pages = $this->pages->all()->toHierarchy();

		$view->with('pages', $pages);
	}
}