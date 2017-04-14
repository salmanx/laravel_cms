<?php

namespace Rocket\Templates;

use Illuminate\View\View;
use Rocket\Models\News;
use Carbon\Carbon;

class AllNewsTemplate extends AbstractTemplate
{
	protected $view = 'all_news';

	protected $news;

	public function __construct(News $news)
	{
		$this->news = $news;
	}

	public function prepare(View $view, array $parameters)
	{
		$news = $this->news->all();
		
		$view->with('news', $news);				 	
	}
}