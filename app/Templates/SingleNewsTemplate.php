<?php

namespace Rocket\Templates;

use Illuminate\View\View;
use Rocket\Models\Notice;
use Carbon\Carbon;

class SingleNewsTemplate extends AbstractTemplate
{
	protected $view = 'single_news';

	protected $news;

	public function __construct(Notice $news)
	{
		$this->news = $news;
	}

	public function prepare(View $view, array $parameters)
	{
		$news = $this->news->where('id', $parameters['id'])->where('slug', $parameters['slug'])->first();
		
		$view->with('news', $news);				 	
	}
}