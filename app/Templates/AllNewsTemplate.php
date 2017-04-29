<?php

namespace Rocket\Templates;

use Illuminate\View\View;
use Rocket\Models\News;
use Rocket\Models\Adminstration;
use Carbon\Carbon;

class AllNewsTemplate extends AbstractTemplate
{
	protected $view = 'all_news';

	protected $news;

	protected $adminstrations;

	public function __construct(News $news, Adminstration  $adminstrations)
	{
		$this->news = $news;

		$this->adminstrations = $adminstrations;

	}

	public function prepare(View $view, array $parameters)
	{
		$news = $this->news->paginate(15);

		$adminstrations = $this->adminstrations->orderBy('lft', 'asc')->take(4)->get();
		
		$view->with('news', $news)->with('adminstrations', $adminstrations);				 	
	}
}